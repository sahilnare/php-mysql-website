# -*- coding: utf-8 -*-
"""
Created on Fri Dec 20 21:59:21 2019

@author: Sahil
"""


collegeData = """Indian Institute  of Technology Madras	Chennai	Tamil Nadu	88.95	1
Indian Institute  of Technology Bombay	Mumbai	Maharashtra	84.82	2
Indian Institute  of Technology Delhi	New Delhi	Delhi	82.18	3
Indian Institute  of Technology Kharagpur	Kharagpur	West Bengal	77.78	4
Indian Institute  of Technology Kanpur	Kanpur	Uttar Pradesh	75.24	5
Indian Institute  of Technology Roorkee	Roorkee	Uttarakhand	72.57	6
Indian Institute  of Technology Guwahati	Guwahati	Assam	69.25	7
Indian Institute  of Technology Hyderabad	Hyderabad	Telangana	60.87	9
National Institute of Technology, Tiruchirappalli	Tiruchirappalli	Tamil Nadu	60.35	11
Indian Institute  of Technology (Indian School of Mines) Dhanbad	Dhanbad	Jharkhand	59.24	13
Indian Institute  of Technology Indore	Indore	Madhya Pradesh	57.95	14
National Institute of Technology, Rourkela	Rourkela	Odisha	57.05	15
Indian Institute  of Technology Bhubaneswar	Bhubaneswar	Odisha	56.89	18
Indian Institute  of Technology (BHU) Varanasi	Varanasi	Uttar Pradesh	56.62	19
Indian Institute  of Engineering Science and Technology, Shibpur	Howrah	West Bengal	53.24	21A
National Institute of Technology Karnataka, Surathkal	Surathkal	Karnataka	53.16	21
Indian Institute  of Technology Ropar	Rupnagar	Punjab	52.80	22
Indian Institute  of Space Science and Technology	Thiruvananthapuram	Kerala	52.74	23
Indian Institute  of Technology Patna	Patna	Bihar	52.37	24
National Institute of Technology, Warangal	Warangal	Telangana	51.82	25
Indian Institute  of Technology Mandi	Mandi	Himachal Pradesh	51.28	26A
Indian Institute  of Technology Gandhinagar	Gandhinagar	Gujarat	50.45	27
Visvesvaraya National Institute of Technology, Nagpur	Nagpur	Maharashtra	49.55	31
National Institute of Technology, Kurukshetra	Kurukshetra	Haryana	46.29	43
National Institute of Technology Durgapur	Durgapur	West Bengal	45.34	47
Motilal Nehru National Institute of Technology Allahabad	Allahabad	Uttar Pradesh	44.33	48
National Institute of Technology, Calicut	Calicut	Kerala	44.30	50
Malaviya National Institute of Technology Jaipur	Jaipur	Rajasthan	43.88	52
Indian Institute  of Technology Jodhpur	Jodhpur	Rajasthan	43.40	54
Maulana Azad National Institute of Technology Bhopal	Bhopal	Madhya Pradesh	43.34	55
National Institute of Technology, Silchar	Silchar	Assam	43.09	57
Sardar Vallabhbhai National Institute of Technology, Surat	Surat	Gujarat	42.11	61
National Institute of Technology, Hamirpur	Hamirpur	Himachal Pradesh	41.17	64
Dr. B. R. Ambedkar National Institute of Technology, Jalandhar	Jalandhar	Punjab	38.65	74
National Institute of Technology, Raipur	Raipur	Chhattisgarh	37.38	81
Indian Institute of Information Technology, Allahabad	Allahabad	Uttar Pradesh	36.59	90
National Institute of Technology, Agartala	Agratala	Tripura	36.36	92
National Institute of Technology, Meghalaya	Shillong	Meghalaya	36.00	98"""

dataArray = collegeData.split('\n')
print("INSERT INTO collegeranklist (institute, year, rank) VALUES")
for i in dataArray:
    subData = i.rsplit(sep='\t')
    
    #print(subData[0])
    name = subData[0]
    rank = subData[4]
    print("(\""+name+"\", 2018, "+rank+"),")
