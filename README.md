# Experimenting

This project is the expression of the testing and experimenting done throughout my study of Jeffrey Way's course "Object Oriented Principles in Php".

## Classes

That is the first idea of abstraction used to define some sort of "blueprint" for whatever concept  is needed to be used for thhe developing of an application.
A class consists of properties and behaviors. It also have a said visibility for each of the things that define it.

## Objects

Utilizing a model (a class, in this context), an instance of it is built. This is the object: an specific and actual example of its class. Objects have states, and can exchange information and interact with eachother.

## Encapsulation

This is one of the most important aspects of OOP. Encapsulation talks about the visibility and access related to objects. Wether they are to be open to change by other classes or other packages. The communication between objects can be made through methods, and those can, for instance, change attributes.

## Inheritance

As there are both specific and general concepts in the real world, so it does in OOP. Sometimes classes represent things that are based on some other, more general thing. So it's an option to build classes in this structure, where a superclass has properties and behaviors that are to be inherited by their subclasses.

## Abstract Class

It's not always the case for a class to be instanciated. It maybe that it's function is only to be the model for other classes to extend. When that's the case, an abstract class is the go-to.

## Interface

Considering the situations when a class *must* have some sort of behavior, there is the Interface to be the contract in which the class that implements it is bound to obey. It also allows for flexibity when handling interaction with other classes.

## Object Composition

As things in the world are made of other things, objects can also be made of other objects. In the construction of an object, it's possible to require instances of other objects, than making it a composition.

## Value Object

Relying on primitive types for stablishing attributes might not always be the best idea. Sometimes there are more specific qualities to an attribute. In these cases, it's possible to use the Value Object. It allows the creation of an simple, though more precise object that holds an immutable value.

## Exceptions

The goal with using exceptions is to deal with the cases that go differently than the expected within the scope of prediction of possible errors. That can be done by storing the exceptions and stablishing a designated course of action that will handle them.

## General notes:

- It's preferrable to use implement scripts using composition rather than inheritance, because inheritance can create undesired coupling.

- In istances of objects calling functions inside doubled quotes, it's needed to use braces.
    ex.: echo "Error: {$e->getMessage()}";

- When stablishing an array with the intention of passing only elements of a specific type to it, it's a good practice to document it right above the declaration.
    ex.: /** @var array{type} */

- Many aspects of developing, like choosing a certain class, value object, property, visibility etc, involve reasoning behind it, and not simply following learned instructions, rules or models.
