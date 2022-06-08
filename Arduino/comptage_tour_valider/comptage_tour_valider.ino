#include <SPI.h>
#include <RFID.h>
#include <ArduinoSTL.h>
#include <map>

using namespace std;

RFID rfid(10,9);   
unsigned char status;
unsigned char str[MAX_LEN];
int ID;

std::map<long int, long int> RANKS = {
            {88046857, 0}, {167312, 0},             //{ID, Nmbre de tour}
            { 0, 2 }, { 2, 2 }, { 6, 2 }, { 8, 2 },
            { 1, 1 }, { 3, 1 }, { 5, 1 }, { 7, 1 },
                                     };
                                     
void setup()
{
  Serial.begin(9600);
  SPI.begin();
  rfid.init(); 
}

void TrouverID()
{ 
  if (rfid.findCard(PICC_REQIDL, str) == MI_OK) {
    Serial.println("Puce trouvée !");}
}

void loop()
{
    TrouverID();
    
    if (rfid.anticoll(str) == MI_OK) {
      Serial.print("L'ID de la puce est : ");
    
      for(int i = 0; i < 4; i++){
        Serial.print(0x0F & (str[i] >> 4),HEX);
        Serial.print(0x0F & str[i],HEX);
      }
      Serial.println("");
      ID=rfid.selectTag(str);
    
   //Compter le nombre de passage
    RANKS[ID] = RANKS[ID]+1;
    Serial.print("le nombre de tour est : ");
    Serial.println(RANKS[ID]);
}
    delay(1000);
}
