class Student:
    def __init__(self, name, age, grades):
        self.name = name
        self.age = age
        self.grades = grades
    
    def adding_grades(self, subject, score):
        self.grades[subject] = score


    def calc_average(self):
        return sum(self.grades.values())/len(self.grades) if self.grades else 0   ##########


def add_student(students):
    student_id = input("Enter Student ID: ")
    if student_id in students:
        print("The student ID exists !")
    else:
        name = input("Enter Student Name: ")
        age = input("Enter Student Age: ")
        grades = input("Enter Student Grades(e.g., English: 90, Math: 30): ")
        

    #parse grades into a dictionary
    grades_dict = {}
    if grades:
        for grade in grades.split(','):
            subject, score = grade.split(':')
            grades_dict[subject.strip()] = int(score.strip())
        ###Add the student to the dictionary
    students[student_id] = Student(name, age, grades_dict)       
    print("Student added successfully! ")    

def remove_student(students):
    student_id = input("Enter Student ID: ")
    if student_id in students:
        del students[student_id]
        print("Student removed successfully.")
    else:
        print("Student ID not found!") 

def find_student(students):
    student_id = input("Enter Student ID: ")  
    if student_id in students:
        student = students[student_id]   #########
        print(f"\nDetails of Student: {student_id}: ")
        print(f"Name: {student.name}")
        print(f"Age: {student.age}")
        print(f"Grades: {student.grades} ")
        print(f"Average Grade: {student.calc_average():.2f}") 
    else:
        print('Student ID not found')

students = {}
while True:    #for repeating one query until it meets the needs
    print("\n1. Add Student\n2. Remove Student\n3. Find Student\4. Exit") 
    choice = input("Enter your choice: ")
    if choice == "1":
        add_student(students)
    elif choice == "2":
        remove_student(students)
    elif choice == "3":
        find_student(students)
    elif choice == "4":
        print("Exiting the program. Bye")
        break
    else:
        print("Invalid choice! Please try again.")  
        



        



    



          