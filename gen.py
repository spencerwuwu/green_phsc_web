#!/bin/python3

import json
import os


lists = os.popen("ls ~/Pictures/*.jpg").read().splitlines()
src_lists = []
for src in lists:
    src_lists.append({"src": src})
print(json.dumps(src_lists))
