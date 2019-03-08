import sys
import requests 
import ffmpy

requests.packages.urllib3.disable_warnings()

def getAnalysis(API_Key,WavPath):
	
	# ff = ffmpy.FFmpeg(inputs={"D:\\Download\\test.mp3": None}, outputs={'demo3.wav': '-acodec pcm_s16le -ac 1 -ar 8000'})
	# ff.cmd
	# ff.run()
	res = requests.post("https://token.beyondverbal.com/token",data={"grant_type":"client_credentials","apiKey":API_Key})
	token = res.json()['access_token']
	headers={"Authorization":"Bearer "+token}
	pp = requests.post("https://apiv5.beyondverbal.com/v5/recording/start",json={"dataFormat": { "type":"WAV" }},verify=False,headers=headers)
	recordingId = pp.json()['recordingId']
	with open(WavPath,'rb') as wavdata:
		r = requests.post("https://apiv5.beyondverbal.com/v5/recording/"+recordingId,data=wavdata, verify=False, headers=headers)
		return r.json()


json = getAnalysis("060fe676-fb88-47af-9c43-b0fab9ecf856","D:\\Download\\wamp64\\www\\demo3.wav")
# print(json)
txt = json['result']
txt2 = txt['analysisSummary']
txt3 = txt2['AnalysisResult']
ArousalT = txt3['Arousal']
ValenceT = txt3['Valence']
TemperT = txt3['Temper']
Emotion_groupT = txt3['Emotion_group']
Arousal = ArousalT['Mode']
Valence = ValenceT['Mode']
Temper = TemperT['Mode']
Emotion_group = Emotion_groupT['Mode']
# print(txt3)
print(Arousal)
print(Valence)
print(Temper)
print(Emotion_group)
