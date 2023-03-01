#include <Wire.h>
#include <WiFiNINA.h>
#include <SPI.h>
#include <RFID.h>

char ssid[] = "TP-LINK_SNIR";
char pass[] = "P208P210";

int status = WL_IDLE_STATUS;

char server[] = "192.168.112.124";

String postData;
String postVariable = "IdCarte=";
  
void Envoi();
int debut;

WiFiClient client;

RFID rfid(10,9);   
unsigned char str[MAX_LEN]; 



void setup(void) {

  Serial.begin(9600);
  SPI.begin();
  rfid.init();
  
  
  Serial.begin(9600);

    while (status != WL_CONNECTED) {
    Serial.print("Attempting to connect to Network named: ");
    Serial.println(ssid);
    status = WiFi.begin(ssid, pass);
    delay(10000);
}
Serial.print("SSID: ");
  Serial.println(WiFi.SSID());
  IPAddress ip = WiFi.localIP();
  IPAddress gateway = WiFi.gatewayIP();
  Serial.print("IP Address: ");
  Serial.println(ip);
}
void loop() {

  //Search card, return card types
  if (rfid.findCard(PICC_REQIDL, str) == MI_OK) {
    Serial.println("Carte trouvée !");
    // Montre le type de carte
    ShowCardType(str);
   
    if (rfid.anticoll(str) == MI_OK) {
      Serial.print("L'ID de la carte est: ");
    
      for(int i = 0; i < 4; i++){
        Serial.print(0x0F & (str[i] >> 4),HEX);
        Serial.print(0x0F & str[i],HEX);
      }
      Serial.println("");
    }
  
    rfid.selectTag(str);
  }
  rfid.halt();  
  
      Envoi();
  }
  
  void ShowCardType(unsigned char * type)
{
  Serial.print("Type de carte est: ");
  if(type[0]==0x04&&type[1]==0x00) 
    Serial.println("MFOne-S50");
  else if(type[0]==0x02&&type[1]==0x00)
    Serial.println("MFOne-S70");
  else if(type[0]==0x44&&type[1]==0x00)
    Serial.println("MF-UltraLight");
  else if(type[0]==0x08&&type[1]==0x00)
    Serial.println("MF-Pro");
  else if(type[0]==0x44&&type[1]==0x03)
    Serial.println("MF Desire");
  else
    Serial.println("Unknown");
}

 void Envoi()
  {
  int temperatureF = 18;
  postData = postVariable + temperatureF;
    if (client.connect(server, 80)) {
    client.println("POST ../php/connect.php HTTP/1.1");
    client.println("Host: 19.168.112.124");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(postData.length());
    client.println();
    client.print(postData);
  }

  if (client.connected()) {
    client.stop();
  }
  Serial.println(postData);

  delay(3000);
  }
