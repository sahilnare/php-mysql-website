# -*- coding: utf-8 -*-
"""
Created on Wed Dec 18 21:03:49 2019

@author: Sahil
"""

collegeData = """229 Sardar Vallabhbhai National Institute of Technology, Surat 4107 Chemical Engineering HS OBC-NCL Gender-Neutral 40758 76803
229 Sardar Vallabhbhai National Institute of Technology, Surat 4107 Chemical Engineering HS OBC-NCL Female-only 57604 62907
229 Sardar Vallabhbhai National Institute of Technology, Surat 4107 Chemical Engineering HS GEN-EWS Gender-Neutral 55515 56872
229 Sardar Vallabhbhai National Institute of Technology, Surat 4107 Chemical Engineering HS GEN-EWS Female-only 111376 111376
216 National Institute of Technology Raipur 4127 Metallurgical and Materials Engineering HS OPEN Gender-Neutral 51392 79615
216 National Institute of Technology Raipur 4127 Metallurgical and Materials Engineering HS OPEN Female-only 71793 99786
216 National Institute of Technology Raipur 4127 Metallurgical and Materials Engineering HS SC Gender-Neutral 157741 239976
205 National Institute of Technology Agartala 4114 Electronics and Communication Engineering HS ST Female-only 653653 897526
205 National Institute of Technology Agartala 4114 Electronics and Communication Engineering OS OBC-NCL Gender-Neutral 27839 35144
205 National Institute of Technology Agartala 4114 Electronics and Communication Engineering OS OBC-NCL Female-only 52552 63634
202 Malaviya National Institute of Technology Jaipur 4125 Mechanical Engineering OS OPEN Female-only 23862 27774
202 Malaviya National Institute of Technology Jaipur 4125 Mechanical Engineering OS OPEN(PwD) Gender-Neutral 320230 320230
202 Malaviya National Institute of Technology Jaipur 4125 Mechanical Engineering OS SC Gender-Neutral 69887 83188
201 Dr. B R Ambedkar National Institute of Technology, Jalandhar 4109 Civil Engineering OS SC Gender-Neutral 76706 109555
201 Dr. B R Ambedkar National Institute of Technology, Jalandhar 4109 Civil Engineering OS SC Female-only 139616 139616
201 Dr. B R Ambedkar National Institute of Technology, Jalandhar 4109 Civil Engineering OS ST Gender-Neutral 97993 107099"""

dataArray = collegeData.split('\n')
for i in dataArray:
    subData = i.rsplit(sep=' ', maxsplit=5)
    k = 0
    inder = 0
    subData2 = subData[0].rsplit(' ')
    for ind, j in enumerate(subData2):
        if j.isdigit():
            k+=1
            if k==1:
                inder2 = ind + 1
            if k==2:
                inder = ind + 1
    m = subData2[inder:]
    t = subData2[inder2:inder-1]
    name = " ".join(t)
    branch = " ".join(m)
    state = subData[1]
    category = subData[2]
    gender = subData[3]
    opening = subData[4]
    closing = subData[5]
    #print(branch)
    print("VALUES (`"+name+"`, `"+branch+"`, `"+state+"`, `"+category+"`, `"+gender+"`, `"+opening+"`, `"+closing+"`)")
    
    
    
    