#include <ArduinoSTL.h>
#include <map>
#include <ArduinoJson.h>

using namespace std;


int valeur1,valeur2, valeur3;
StaticJsonDocument<200> doc;

std::map<int, float> nomMap;

void setup()
{
    Serial.begin(9600);
  nomMap = {{123456,0},{654321,0},{987654,0}};
  JsonArray data = doc.createNestedArray("data");
  data.add(48.756080);
  data.add(2.302038);
}

void loop()
{
    delay(2000);
    doc["Nombre_Tour"] = valeur1;
    doc["Meilleur_Temps"] = valeur2;
    doc["Dernier_Temps"] = valeur3;

  serializeJson(doc, Serial);
  Serial.println();
  //Serial.println(nomMap[123456]);
  valeur1 = valeur1 + 10;
  valeur2 = valeur2 + 1;
  nomMap[123456]=nomMap[123456]+2;
}
