nilai1 = int(input("Masukkan Nilai ke-1 :"))
nilai2 = int(input("Masukkan Nilai ke-2 :"))
nilai3 = int(input("Masukkan Nilai ke-3 :"))

if nilai1 > nilai2 and nilai1 > nilai3:
    print(nilai1, "lebih besar dari ", nilai2, "lebih besar dari", nilai3,)
elif nilai2 > nilai1 and nilai2 > nilai3:
    print(nilai2, "lebih besar dari ", nilai1, "lebih besar dari", nilai3,)
elif nilai3 > nilai1 and nilai3 > nilai2 :
    print(nilai3, "lebih besar dari ", nilai2, "lebih besar dari", nilai1)
  