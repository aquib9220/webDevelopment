num=int(input("Enter a number to check the number is armstrong number or not: "))
n=num
k=0
sum=0
while n!=0:
    n//=10
    k+=1
n=num
while n!=0:
    rem=n%10
    sum+=pow(rem,k)
    n//=10
if sum==num:
    print("%d is a Armstrong Number"%num)
else:
    print("%d is Not a armstrong number"%num)
