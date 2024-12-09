First I generated full binary representation of single byte:
```
0       0000
1       0001
2       0010
3       0011
4       0100
5       0101
6       0110
7       0111
8       1000
9       1001
A       1010
B       1011
C       1100
D       1101
E       1110
F       1111
```
Next I was taking a single byte form each number and comparing bits. If bits are the same, there is 0, if there are diffirent I write 1. First byte of 2nd word is 0000  - we need to pad, because it is shorter, so efectively first letter of results has to be the same as first word's first letter:

```
c (1100) xor 0 (0000) => 1100 (c)
4 (0100) xor 4 (0100) => 0000 (0)
1 (0001) xor c (1100) => 1101 (d)
1 (0001) xor f (1111) => 1110 (e)
5 (1001) xor c (1000) => 1101 (d)
```
