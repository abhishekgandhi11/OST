#!/bin/python
import sys
def solve(A):
    #  Return the sum of S(S(A)) modulo 10^9+7.
    b = []
    for k in range (0 ,len(A)):
        for i in range (0 , len(A)-k):
            j = i + k
            b.append(max(A[i:j+1]))
            print b
    return b
a
if __name__ == "__main__":
    n = int(raw_input().strip())
    a = map(int, raw_input().strip().split(' '))
    A = solve(a)
    result = solve(A)
    print result
    print sum(result)%(1000000000+7)
