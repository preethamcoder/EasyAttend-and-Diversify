import csv

def manualentry():
    outfile = open('students.csv', 'a', newline='')
    w = csv.writer(outfile)    
    while True:
        name = input("Enter name #: ")  
        age = input("Enter age: ")  
        race = input("Enter race: ")
        print(name, age, race)  
        input4 = input("Append to inventory list? yes no or stop: ")  
        if input4.lower() == "yes" or input4.lower() == "y":
            w.writerow([name, age, race])  # <-This is the portion that seems to fall apart.
            print("UPDATED")
        elif input4.lower() == "n" or input4.lower() == "no":
            print("skipped em, put the next file.")
        elif input4.lower() == 'stop':
            print('Not writing anymore! Stopping')
            outfile.close()
            exec(open('sort.py').read())
        else:
            print("Invalid entry restarting program.") # this fucks sometimes idk, 


manualentry()