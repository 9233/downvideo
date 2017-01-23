#coding:utf-8
import os
path="F:/BaiduYunDownload/js/"
f=os.listdir(path)
n=0
for i in f:
    #设置旧文件名（就是路径+文件名）
    oldname=path+f[n]
    #设置新文件名
    newname=path+'V'+str(n+3)+'.mp4'
    #用os模块中的rename方法对文件改名
    os.rename(oldname,newname)
    print(oldname,'=>',newname)
    n=n+1
