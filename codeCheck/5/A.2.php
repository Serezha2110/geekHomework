<?php


class A {
    public function foo() { //объявление публичного метода foo
        static $x = 0; //объявление статической переменной $x
        echo ++$x; //префиксная инкрементация. Т.е. сначала происходит увеличение переменной после чего возврат значения
    }
}
class B extends A { //объявление класса наследника класса А
}
$a1 = new A(); //создание объекта класса A
$b1 = new B(); //создание объекта класса B
$a1->foo(); //вызов функции foo из объекта класса А
$b1->foo(); //вызов функции foo из объекта класса B
$a1->foo(); //вызов функции foo из объекта класса А
$b1->foo(); //вызов функции foo из объекта класса B

//в итоге присходит последовательный вывод 1122, вывод начинается с 1 потому что в методе foo был применена префиксная инкрементация
//так как переменная $x статическая, то ее значение не зависит от объекта класса, НО зависит непосредственно от класса, так как вызов происходит из объектов разных классов, то переменная увеличивается отдельно от каждого объекта класса
