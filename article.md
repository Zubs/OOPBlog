# Getting Started With Object Oriented Programming(OOP) In PHP
## How To Build A Simple CRUD Application

### Why Use OOP?
OOP lets you focus on the application data rather than the data, as all logic is already sorted in the class even before the app comes to live. OOP places focus on the real-life object you're trying to model in your application, its properties and features. This helps you build an application that closely resembles the real world we live in.

### Important Things To Know In OOP
1. Encapsulation: This in basics terms refers to separating the true logic or workings of an application from the users of the application. This idea was gotten from real world objects like our cars, radios, televisions, mobile phones and other things we use. A good example would be in cars where you push the accelerator to make the car move, without having to care about what actually happens, what the engine does, how it relates with the tires amongst other actions that take place. OOP lets you create components that come together to create the application.

#### Advantages Of Encapsulation
1. Reuseability of Code: The logic is put in a class with methods which the application uses. The code can be reused in as many parts of the app as you wish.
2. You can chose to change the implementation of a certain method without having to change code in multiple places.
2. Ease Of Debugging: The logic of the application is easily manageable as it is away from the rest of the application data and other logic.

2. Inheritance: Many objects in the real world share some similar attributes and can be said to be subsets of a general class. An example would be having a class of people, with attributes such as possession of two legs, mouth, ears and eyes. Then a child class or subset would be a more gender-specific class called men, which now has more attributes specific to the male gender. So the men class is said to be a child of the People class, and it inherits the basic properties of people. The men class can still have a child or children classes with more specific features.

#### Advantages Of Inheritance
1. Reuseability of Code: Some methods that a child class needs can be used once defined by the parent class.

3. Polymorphism: This is the ability of created classes to perform differently on different conditions. This lets you create methods that are implemented differently based on the condition. A simple example could be the men and women classes created above, they could inherit a dress method from the people class, this method now depends on the gender, as a man would dress in shirt and pants while the woman would dress in blouse and skirts.

#### Importance of Polymorphism
1. It saves stress of rewriting unique methods for similar actions.

Note: Together, the listed concepts form the basis of OOP.

### Diving Deeper
#### Classes
A class is said to be an enbodiment of of an entity's defining attributes and behaviours. Classes help us represent real life entities in our application. The characteristics of an entity is referred to as properties in OOP, and the behaviours are referred to as methods.

#### Objects
An object is said to be an instance of a class, this takes the properties and methods of the class. In a school with a student class, each student could be an instance of the class, an object.

Note: Instantiation is the practice of creating an object based on a predefined class.

#### Properties
Properties are attributes that are intended to describe some aspects of a class. Like a car class would have properties like color, model, maker.

##### Property Scopes
1. Public
2. Private
3. Protected
4. Final
5. Static

#### Methods
A method is like function, except that it defines the behaviour of a class, the class it belongs to.

##### Method Scopes
1. Public
2. Private
3. Protected
4. Abstract
5. Final
6. Static

### Constructors And Deconstructors