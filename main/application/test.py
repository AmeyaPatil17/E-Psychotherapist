import sys
import json
#who = sys.argv[1]
string = ''
for word in sys.argv[1:]:
    string += word + ' '

# print string
#print "Hello %s" % who

import paralleldots

api_key   = "Au21J3db0hOL2pkwLsiJxGa0A6nq6Y3vvnH1DgOchAw"
text      = "Ameya is a great guy"
# category  = { "finance": [ "markets", "economy", "shares" ], "world politics": [ "diplomacy", "UN", "war" ], "india": [ "congress", "india", "bjp" ] }
# category  = { "sexual": [ "boob", "boobs", "fuck", "dick", "nude", "sexy", "banging", "boning", "jerking", "fucking", "naked", "orgy", "vagina", "penis", "shithole", "pussy" ], "common": [ "bat", "butterfly", "moth", "cave entrance", "clowns", "ribbon", "bow-tie", "stomach", "esophagus", "boat", "submarine", "mushroom cloud", "goatees", "rib cage", "christmas tree", "lions", "pigs", "bears", "Fire", "smoke", "explosion", "map", " flower", "anatomy", "Sea life", "spiders", "crabs", "caterpillars" ], "paranoid": [ "mask", "animal face", "jack o lantern", "monster", "scissors", "crocodile", "gossips", "girls fighting", "witches", " men fighting" ] }

paralleldots.set_api_key( api_key )
#print( "API Key: %s" % paralleldots.get_api_key() )

#print( paralleldots.sentiment( string ) )
#json.loads(response data)
# print( paralleldots.emotion( string ) )
data = paralleldots.sentiment( string )
data2 = paralleldots.emotion( string )
# print( paralleldots.custom_classifier( text, category ) )
# print( paralleldots.phrase_extractor( text ) )
# data2 = paralleldots.custom_classifier( string, category )
# print(data)
txt3 = data['sentiment']
txt = data2['emotion']
txt2 = txt['emotion']
print(txt2)
print(txt3)
# print data['sentiment']
 # print data['name']
 

# jsonData = '{"name": "Frank", "age": 39}'
# jsonToPython = json.loads(jsonData)
# print jsonToPython
# print jsonToPython['name'] 