import requests
import json
# import bs4
# import lxml

URL = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWB-56E2E4AF-2DE9-4D04-B9AE-5E8A18BA4943&format=JSON'
session = requests.Session()

data = session.get(URL)

# print(data.text)

j = json.loads(data.text)
# print(j)
j = json.dumps(j, indent = 5 ,ensure_ascii=False)
print(j)
with open("../nm.txt","w") as A:
    A.write(j)

# print(data.text)





