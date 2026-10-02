//นาย ธีรศักดิ์  มรรคไพบูลย์  6030300466
//นาย สหรัชต์ แสงสุวรรณ 6030301047

#include <TridentTD_LineNotify.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h> 
#include <Wire.h>

#define SSID "" // name wifi hotspot
#define PASSWORD ""// password wifi hotspot

#define VIBRATION_SENSOR_PIN D2 //pin sw420 connect to wemos d1
#define LINE_TOKEN ""//line token

WiFiClient client;
int motion_detected = LOW; // set status input sw420 is low

String url;
const int httpPort = 80;
const int port=httpPort;
String host = "vibration.dynv6.net";//host of web browser

void setup() {
  ESP.wdtDisable(); ESP.wdtEnable(WDTO_8S);
  Serial.begin(115200);
  WiFi.mode(WIFI_OFF);  //Prevents reconnection issue (taking too long to connect)
  WiFi.mode(WIFI_STA);  //This line hides the viewing of ESP as wifi hotspot
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(SSID);
  
  WiFi.begin(SSID, PASSWORD);//begin connecting wifi
  
  while (WiFi.status()!=WL_CONNECTED){
    delay(500);
    Serial.println("connecting..."); 
  } 
  Serial.print("WiFi connected and IP address is ");
  Serial.println(WiFi.localIP());// show local ip

  LINE.setToken(LINE_TOKEN);//set line token
  client.setNoDelay(1);
}

void loop() {
  motion_detected = digitalRead(VIBRATION_SENSOR_PIN);//read value in sw420
  Serial.println(motion_detected);// show status value sw420
  if(motion_detected == HIGH){
    Serial.println("DETECTED VIBRATION");//show serial monitor 
    LINE.notify("detected vibration");//send message to line
    
    HTTPClient http;    //Declare object of class HTTPClient
 
    //GET Data
    String getData = "?Status=detected%20vibration";  //Note "?" added at front
    String Link = "http://vibration.dynv6.net/esp-data.php" + getData;
  
    http.begin(Link);     //Specify request destination
  
    int httpCode = http.GET();            //Send the request
    String payload = http.getString();    //Get the response payload
 
    Serial.println(httpCode);   //Print HTTP return code
    Serial.println(payload);    //Print request response payload
 
    http.end();  //Close connection
  }
  delay(500);
}
