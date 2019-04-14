#!/bin/python3

import json
import os


lines = os.popen("cat parse/05.txt").read().splitlines()
src_lists = []
no = 0
for line in lines:
    line = line.encode("utf-8").decode("utf-8")
    if no is 0:
        img = "/images/2015/" + line + ".jpg"
    elif no is 1:
        name = line
    elif no is 2:
        author = line
    elif no is 3:
        des = line
    elif no is 4:
        no = 0
        src_lists.append({"img": img, "name": name, "author": author, "des": des})
        continue
    no += 1

lists = []
list1 = []
list2 = []
list3 = []
lists.append(list1)
lists.append(list2)
lists.append(list3)

no = 0
for thing in src_lists:
    lists[no].append(thing)
    if no is 2:
        no = 0
    else:
        no += 1

for thing in lists:
    print(json.dumps(thing))

lists = []
list1 = []
list2 = []
lists.append(list1)
lists.append(list2)

no = 0
for thing in src_lists:
    lists[no].append(thing)
    if no is 1:
        no = 0
    else:
        no += 1

for thing in lists:
    print(json.dumps(thing))
