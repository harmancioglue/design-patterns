# Design Patterns in PHP

This repository aims to apply design patterns in basic level to give an idea.

## Requirements

- Composer
- Docker

## Tech

- Symfony as PHP framework

## Installation

To make project run. After containers run, you can acces to project.
http://localhost:8080/desing-pattern/observer

Note: Every pattern has route with its name after "design-pattern" prefix.

http://localhost:8080/desing-pattern/observer

http://localhost:8080/desing-pattern/decorator

http://localhost:8080/desing-pattern/strategy/square

```sh
docker-compose up -d --build
```

Install dependencies

```sh
composer install
```

## Design Patterns

| Name | Resource |
| ------ | ------ |
| Adapter | [Adapter Design Pattern][ADP] |
| Chain of Responsibility | [Chain of Responsibility Design Pattern][CRDP] |
| Decorator | [Decorator Design Pattern][DDP] |
| Facade | [Facade Design Pattern][FDP] |
| Observer | [Observer Design Pattern][ODP] |
| Prototype | [Prototype Design Pattern][PDP] |
| Specification | [Specification Design Pattern][SDP] |
| Strategy | [Strategy Design Pattern][STDP] |


[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


[ADP]: <https://designpatternsphp.readthedocs.io/en/latest/Structural/Adapter/README.html>
[CRDP]: <https://designpatternsphp.readthedocs.io/en/latest/Behavioral/ChainOfResponsibilities/README.html>
[DDP]: <https://designpatternsphp.readthedocs.io/en/latest/Structural/Decorator/README.html>
[FDP]: <https://designpatternsphp.readthedocs.io/en/latest/Structural/Facade/README.html>
[ODP]: <https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Observer/README.html>
[PDP]: <https://designpatternsphp.readthedocs.io/en/latest/Creational/Prototype/README.html>
[SDP]: <https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Specification/README.html>
[STDP]: <https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Strategy/README.html>
