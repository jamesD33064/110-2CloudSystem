import requests
import json
# import bs4
# import lxml

URL = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWB-56E2E4AF-2DE9-4D04-B9AE-5E8A18BA4943&format=JSON'
session = requests.Session()

data = session.get(URL)

j = json.loads(data.text)
# j = json.dumps(j, indent = 5 ,ensure_ascii=False)
# with open(r"CloudSystem\nm.txt","w") as A:
#     A.write(j)

for data in j['records']['location']:
    print('\n經度 =%s' % data['lat'])
    print('緯度 =%s' % data['lon'])
    print('觀測站編號 =%s' % data['stationId'])
    print('站名 =%s' % data['locationName'])
    print('觀測時間 =%s' % data['time']['obsTime'])
    for data2 in data['weatherElement']:
        print('subitem name =%s' % data2['elementName'])
        print('subitem name =%s' % data2['elementValue'])
    for data3 in data['parameter']:
        print('subitem name =%s' % data3['parameterName'])
        print('subitem name =%s' % data3['parameterValue'])


