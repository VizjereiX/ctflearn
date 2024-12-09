 - URL: https://ctflearn.com/challenge/1116
 - Tool: gobuster

# Steps
 - wget https://raw.githubusercontent.com/v0re/dirb/master/wordlists/common.txt
 - sudo apt-get install gobuster
 - gobuster dir -w common.txt -e  -u https://gobustme.ctflearn.com  -b 404

