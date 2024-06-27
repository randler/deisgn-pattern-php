
[![pt-br](https://img.shields.io/badge/lang-pt--br-green.svg)](README.pt-br.md)

## Introduction

The Design Pattern Chain of Responsibility, through of a chain responsibility can avoid dependencies among a object receptor and object request, That is, a object is responsible to decide if will process anything message or pass the responsibility for next object. 

![alt text](image.png)


The intention of this pattern is very clear. The object Receptor, when receive the request, will alternate between objects until tha one object know how deal with the request

![alt text](image2.png)