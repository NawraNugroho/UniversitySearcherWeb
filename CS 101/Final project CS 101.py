import random


def ask_number(question):
    """Ask for a number within a range of 1-10"""
    response = None
    while response not in range(1, 11):
        try:
            response = int(input(question))
        except:
            print("Number only!")
            continue
        else:
            continue

    return response


def position():
    """Determine user's position"""
    position = None
    
    leadership = ask_number("Leadership skill (from 1-10): ")
    coding = ask_number("Coding skill (from 1-10): ")
    design = ask_number("Designing skill (from 1-10): ")
    
    if leadership > coding and leadership > design:
        position = "CEO"
    elif coding > leadership and coding > design:
        position = "CTO"
    elif design > leadership and design > coding:
        position = "Designer"
    elif leadership == coding and leadership > design:
        positions = ["CEO", "CTO"]
        position = random.choice(positions)
    elif leadership == design and leadership > coding:
        positions = ["CEO", "Designer"]
        position = random.choice(positions)
    elif coding == design and coding > leadership:
        positions = ["CTO", "Designer"]
        position = random.choice(positions)
    else:
        positions = ["CEO", "CTO", "Designer"]
        position = random.choice(positions)
    
    return position


def interests():
    """ask for user's three interests"""
    
    interest_1 = None
    interest_2 = None
    interest_3 = None
    
                  #0     #1            #2   #3     #4      
    interests = ["AI", "Blockchain", "AR", "VR", "IoT", 
                #5            #6        #7           #8            #9
                "Big Data", "Fintech", "ECommerce", "Healthcare", "Enviroment"]
    
    print("\nEnter 3 numbers corresponding to fields that you're intrested in!")

    for i in range(1, 11):
        print(i, end="")
        print(".", interests[i-1])
        
    interest_1 = ask_number("\nInterest #1: ")
    
    interest_2 = interest_1
    while interest_2 == interest_1:
        interest_2 = ask_number("Interest #2: ")
    
    interest_3 = interest_2
    while interest_3 == interest_2 or interest_3 == interest_1:
        interest_3 = ask_number("Interest #3: ")

    interest_1 = interests[interest_1-1]
    interest_2 = interests[interest_2-1]
    interest_3 = interests[interest_3-1]
    
    return interest_1, interest_2, interest_3
   
    
def matching(position, interests, profiles):
    """match user's interests to people from database"""
    profiles = profiles
    
    for name in profiles:
        common = []
        #check if they're not in the same position
        if profiles[name]["position"] != position:
            #look for at least 1 common interest
            for item in interests:
                for field in profiles[name]["interest"]:
                    if item == field:
                        common.append(item)
                    else:
                        continue
                    
            if len(common) > 0:
                print("\nName:", name)
                print("Position:", profiles[name]["position"])
                print("Common interests: ", end="")
                for field in common:
                    print(field + ", ", end="")
                print("\n")
                
        else:
            continue
        
def login(profiles):
    tries = 5
    
    name = input("Name: ").capitalize()
    while name not in profiles:
        print(name, "is not in the database")
        name = input("Name: ").capitalize()
            
    while tries != 0:
        pwd = input("Password: ")
        if pwd != profiles[name]['password']:
            tries -= 1
        else:
            return name
    
    print("Sorry! You're out-of-tries")
    return None        
            
def menu():
    """Display menu"""    
    print(
    """

                    Hackathon Matching

        0 - Exit
        1 - Sign up & look for suggested people
        2 - Edit data
        3 - Delete data
        4 - Log in & look for suggested people
        
   """
    )
    
    
profiles = {
        "Maya" : {"password" : "M4Y43210", "position" : "CEO", "interest" : ["AI", "VR", "Big Data"]}, 
        "John" : {"password" : "j0hnnyd3pp", "position" : "CEO", "interest" : ["Blockchain", "Big Data", "Fintech"]},
        "Arnold" : {"password" : "4rn0ld", "position" : "CEO", "interest" : ["AR", "IoT", "Enviroment"]},
        "Cherry" : {"password" : "ch3rry4ppl3", "position" : "CTO", "interest" : ["Blockchain", "Fintech", "ECommerce"]},
        "Lara" : {"password" : "lalarayah", "position" : "CTO", "interest" : ["AI", "Blockchain", "Big Data"]},
        "Harry" : {"password" : "h4rryp0tt3r", "position" : "CTO", "interest" : ["IoT", "ECommerce", "Enviroment"]}, 
        "Ronald" : {"password" : "RonaldWeasley", "position" : "CTO", "interest" : ["VR", "IoT", "Healthcare"]},
        "Luna" : {"password" : "LUNALOV3", "position" : "Designer", "interest" : ["AI", "AR", "VR"]},
        "Cho" : {"password" : "chochang!23", "position" : "Designer", "interest" : ["AR", "Big Data", "Healthcare"]},
        "Kelly" : {"password" : "k3!!y10", "position" : "Designer", "interest" : ["IoT", "Fintech", "Enviroment"]}
        }
    
choice = ""

while choice != "0":
    menu()
    choice = input("\nNumber: ")
        
    if choice == "1":
        #sign up and look for suggestion#
        name = input("Name: ")
        pwd = input("Password: ")
        
        var_position = position()
        var_interests = interests()
        interest_1 = var_interests[0] 
        interest_2 = var_interests[1]
        interest_3 = var_interests[2]
        
        profiles[name] = {}
        profiles[name]['password'] = pwd
        profiles[name]['position'] = var_position
        profiles[name]['interest'] = list(var_interests)
        
        print("\n-------PROFILE-------")
        print("Name:", name.capitalize())
        print("Position:", var_position)
        print("Interests:", interest_1 + ",", interest_2 + ",", interest_3)
        print("-----END PROFILE-----")
            
        input("\nPress enter key to continue.")
            
        print("\n\n-------SUGGESTED PEOPLE-------")
        print("Here are some people you should talk to!")
        matching(var_position, var_interests, profiles)
        print("------END SUGGESTED PEOPLE-----")
        
        input("\nPress enter key to continue.")

        
    if choice == "2":
        #edit data#
        edit = None
        name = login(profiles)

        if name != None:
            while edit != "0":
                print("\n\n")
                print(name + ":", profiles[name])
                print(
                """
                0 - Exit
                1 - Edit position
                2 - Edit interests
                3 - Edit name
                """
                )
                edit = input("Enter number: ")
                            
                if edit == "1":
                    #edit position
                    var_position = position()
                    profiles[name]['position'] = var_position
                    print("Edit position successful!")
                    break
                    
                elif edit == "2":
                    #edit interests
                    var_interests = interests()
                    profiles[name]['interest'] = list(var_interests)
                    print("Edit interests successful!")
                    break
                    
                elif edit == "3":
                    #edit name
                    new_name = input("New name: ").capitalize()
                    profiles[new_name] = profiles.pop(name)
                    print("Edit name successful!")
                    break

        else: 
            continue
                
                
    if choice == "3":
        #delete data#
        name = login(profiles)
        
        if name != None:
            del profiles[name]
            print("Delete profile successful!")

        else:
            continue
        
        
    if choice == "4":
        #log in and look for suggestion#
        name = login(profiles)
        
        if name != None:
            var_position = profiles[name]['position']
            var_interests = profiles[name]['interest']
            print("\n\n-------SUGGESTED PEOPLE-------")
            print("Here are some people you should talk to!")
            matching(var_position, var_interests, profiles)
            print("------END SUGGESTED PEOPLE-----")
            
            input("\nPress enter key to continue.")
        else:
            continue