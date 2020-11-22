import random 

cancel = False
class_list = []

while (True):
    name = input("provide name, ")
    age = input("provide age, ")
    race = input("provide race,  ")
    

    class_list.append({
        "name": name,
        "age": age,
        "race": race,
    })

    cont = input("Want to add another? (Y/N)")
    if cont == "N" or cont == "no" or cont == "n" :
        break;
print()
""" print(class_list) """
print()
print("This is the list sorted by race")
sorted_race = sorted(class_list, key=lambda k:(k['race']))


whites_only= list(filter(lambda person: person['race'] == 'white', sorted_race))
blacks_only= list(filter(lambda person: person['race'] == 'black', sorted_race))
hispanics_only= list(filter(lambda person: person['race'] == 'hispanic', sorted_race))
indian_only= list(filter(lambda person: person['race'] == 'american indian', sorted_race))
asian_only= list(filter(lambda person: person['race'] == 'asian', sorted_race))

print(whites_only)
print(blacks_only)
print(hispanics_only)
print(indian_only)
print(asian_only)



group1=[]
group2=[]
group3 =[]


# we want to assign each race to be in one group if we have more than 1 member in each race group

##### ALGORITHM:
#'''First, pick one of the lists. Preferably in order. Use a randomizer, find an index. group1 or whatever group.add(lists[index]). list.pop(index). 
# Repeat the process for the next list, until you have a 0 length. Move on to the next list. Once a group has atleast 1 person from each race, change the group.
# Repeat the process for other groups.'''



""" FIX PLS

for i in whites_only:
    if 'white' in group1:
        check = all(item in whites_only for item in group1)
        print(check)
    else:
        print("group1")
        group1.append(whites_only[0])
        print(group1)
         """