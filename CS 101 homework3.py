# -*- coding: utf-8 -*-
"""
Created on Wed Dec 23 22:13:59 2020

@author: pc
"""

import random

attempts = 8
num = random.randint(1, 100)
min = 1
max = 101
guess = None

while attempts != 0:
  print()
  #Display all numbers left for player to guess
  for i in range(min, max):
    print(i, end=" ")

  guess = int(input("\nGuess my number: "))
  #Keep asking for input if the player's input is out-of-range
  while guess not in range(min, max):
    #if guess != None and guess not in range(min, max):
      #print("Your number is out of range!")
     #else:
      #break
    print("Your number is out of range!")
    guess = int(input("\nGuess my number: "))

  if guess > num:
    print("Too high!")
    attempts -= 1
    max = guess
    print("You have", attempts, "attempt/s left")
  elif guess < num:
    print("Too low!")
    attempts -= 1
    min = guess+1
    print("You have", attempts, "attempt/s left")
  else:
    print("\nCongrats, you read my mind!")
    break


if attempts == 0: 
  print("\nYou lost! My number is", num)