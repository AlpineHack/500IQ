#!/usr/bin/env python
# -*- coding: utf-8 -*-
import hashlib
import sys
string = "Essai"
temp = hashlib.sha256()
i = 0
ok = False
while(ok is False):
    temp.update(string + str(i))
    i += 1
    if(temp.hexdigest()[:6] == '000000'):
        ok = True
print(i)
