#coding:utf-8
import os
path="/var/www/html/paraview/user"
fileList=os.listdir(path)
print fileList
for f in fileList:

    filePath = os.path.join(path, f)
    # 根据紧接着的图片我们可以发现，里面含有文件夹，还有文件，我们
    # 需要处理的只是文件，不是文件夹
    # 所以我们需要isfile来判断一下
    if os.path.isfile(filePath):
        #portion = f.split("-")[0]  # 获取文件名的前半部分
        # 加上后缀
        newName = filePath + ".txt"
        # 新文件的路径
        # 如果代码和文件不在同一个目录下必须这么修改
        # 否则生成的文件就会在里代码运行的目录下面
        newNamePath = os.path.join(path, newName)
        # 重命名
        os.rename(filePath, newNamePath)

        print "new we are handleding the {0}".format(newName)

print "all work is done!"
