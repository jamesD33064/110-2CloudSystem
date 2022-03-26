import requests
import json
import sys	#作業系統套件，用於檔案、目錄資料使用
import requests	#建立雲端WinSocket連線的套件
import json	#了解json內容的json物件的套件
import time	#系統時間套件
import datetime	#時鐘物件
import math	#數學運算套件
import os	# #作業系統套件，用於檔案、目錄資料使用
import http.client	#winsock連線物件之討建
import unicodedata	#Unicode
from pathlib import Path	#存取檔案路徑之套件
from requests.exceptions import HTTPError
# import bs4
# import lxml

URL = 'https://opendata.cwb.gov.tw/api/v1/rest/datastore/O-A0001-001?Authorization=CWB-56E2E4AF-2DE9-4D04-B9AE-5E8A18BA4943&format=JSON'
session = requests.Session()
try:
	res = requests.get(URL)
	res.raise_for_status()
except HTTPError as http_err:
	print(f'HTTP error occurred: {http_err}')
	sys.exit(0)
except Exception as err:
	print(f'Other error occurred: {err}')
	sys.exit(0)
else:
	print('Success!')

j = json.loads(res.text)
# j = json.dumps(j, indent = 5 ,ensure_ascii=False)
# with open(r"CloudSystem\nm.txt","w") as A:
#     A.write(j)

for data in j['records']['location']:
    print('item name =%s' % data['stationId'])
    print('item name =%s' % data['locationName'])
    s01 = data['stationId']
    s02 = data['locationName']
    s03 = data['time']['obsTime']
    s04 = data['lat']
    s05 = data['lon']
    data2 = data['weatherElement']
    s06 = data2[0]['elementValue']
    s07 = data2[1]['elementValue']
    s08 = data2[2]['elementValue']
    s09 = data2[3]['elementValue']
    s10a = data2[4]['elementValue']
    s10 = float(s10a)*10
    s11 = data2[5]['elementValue']
    s12 = data2[6]['elementValue']
    data3 = data['parameter']
    s13 = data3[1]['parameterValue']
    s14 = data3[0]['parameterValue']
    s15 = data3[3]['parameterValue']
    s16 = data3[2]['parameterValue']
    str1 = "http://localhost:8000"
    str2 = "/fcu/opendata/rainadd.php?f01=\'%s\'&f02=\'%s\'&f03=\'%s\'&f04=%s&f05=%s&f06=%s&f07=%s&f08=%s&f09=%s&f10=%s&f11=%s&f12=%s&f13=\'%s\'&f14=\'%s\'&f15=\'%s\'&f16=\'%s\'" %(s01, s02, s03, s04, s05, s06, s07, s08, s09, s10, s11, s12, s13, s14, s15, s16)
    str = str1+str2
    print(str)
    print("-----------------------")

    try:
        x = requests.get(str)
        print(x.status_code)
        #conn.request("GET","/index.php")
        #		conn.request("GET", str3)
        #		r2 = conn.getresponse()
        #		print(r2.status, r2.reason)
        #		#r = conn.getresponse()
        print('3Access Server  is ok')
        #time.sleep(10)
    except: # request.exceptions.RequestException as e: #requests.exceptions.RequestException as e:
        print('Exception in data_output')

        # print('\n經度 =%s' % data['lat'])
        # print('緯度 =%s' % data['lon'])
        # print('觀測站編號 =%s' % data['stationId'])
        # print('站名 =%s' % data['locationName'])
        # print('觀測時間 =%s' % data['time']['obsTime'])
        # for data2 in data['weatherElement']:
        #     print('subitem name =%s' % data2['elementName'])
        #     print('subitem name =%s' % data2['elementValue'])
        # for data3 in data['parameter']:
        #     print('subitem name =%s' % data3['parameterName'])
        #     print('subitem name =%s' % data3['parameterValue'])


