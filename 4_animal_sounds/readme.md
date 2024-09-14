# Polymorphism in PHP (Animal Sounds)

This is an example of **polymorphism** in PHP. It shows how different animals (like dogs and cats) make their own sounds using the same method, `makeSound()`.

### How the Code Works:

1. **Animal Class**:  
   The base class `Animal` has a method `makeSound()` that outputs a general sound.
   
   ```php
   class Animal {
       public function makeSound() {
           echo "some animal sounds!";
       }
   }
   ```

2. **Dog and Cat Classes**:  
   These classes extend `Animal` and override the `makeSound()` method to give specific sounds:
   
   ```php
   class Dog extends Animal {
       public function makeSound() {
           echo "Bark Bark!" . PHP_EOL;
       }
   }

   class Cat extends Animal {
       public function makeSound() {
           echo "Meow meow!" . PHP_EOL;
       }
   }
   ```

3. **How to Use**:  
   You can create `Dog` and `Cat` objects and call `makeSound()` to hear their sounds:
   
   ```php
   $dog = new Dog();
   $dog->makeSound(); // Outputs: Bark Bark!

   $cat = new Cat();
   $cat->makeSound(); // Outputs: Meow meow!
   ```

4. **Polymorphism**:  
   You can also use an array of `Animal` objects (both `Dog` and `Cat`) and loop through them:
   
   ```php
   $animals = [new Dog(), new Cat()];

   foreach($animals as $animal) {
       $animal->makeSound();
   }
   ```

   This will output:
   ```
   Bark Bark!
   Meow meow!
   ```

### How to Run the Code:

1. Save the code in a file (e.g., `animal_sounds.php`).
2. Run it in the terminal:

   ```bash
   php animal_sounds.php
   ```

   Output:
   ```
   Bark Bark!
   Meow meow!
   Bark Bark!
   Meow meow!
   ```

---
