import pandas as pd
csv_file = pd.read_csv('students.csv')
sorted_race = csv_file.sort_values(by=['Race'])
df = pd.read_csv (r'students.csv')
#add so that it sorts only certain race, 

