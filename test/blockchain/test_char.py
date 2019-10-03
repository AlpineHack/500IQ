#!/usr/bin/env python
# -*- coding: utf-8 -*-
from itertools import product
import hashlib
import sys
password = ''
string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
res = hash(password)
found = False
i = 0
while found is False:
    i += 1
    to_attempt = product(string, repeat=i)
    for attempt in to_attempt:
        if res == hash(''.join(attempt)):
            found = True
            print(''.join(attempt))
            break
