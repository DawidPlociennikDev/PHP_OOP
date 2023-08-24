# PHP OOP

### Zadanie 1: System Książek i Autorów

Stwórz system do zarządzania książkami i autorami. W systemie powinny istnieć klasy reprezentujące autorów oraz książki. Książki mogą mieć jeden lub więcej autorów.

- Utwórz interfejs Readable, który będzie zawierać metodę read(). Klasa Book powinna implementować ten interfejs i dostarczyć własną implementację metody read(), która wyświetli tekst "Reading [tytuł książki]...".

- Stwórz klasę abstrakcyjną Person, która będzie zawierać właściwości firstName (imię) i lastName (nazwisko). Następnie stwórz klasy Author i Reader, dziedziczące po klasie Person.

- Utwórz klasę Book, która implementuje interfejs Readable. Książka powinna zawierać informacje o tytule, roku wydania oraz autorach. Konstruktor klasy Book powinien przyjmować te informacje. Metoda read() w klasie Book powinna wyświetlić komunikat "Reading [tytuł książki]..." oraz listę autorów.

- Utwórz klasę Library, która będzie przechowywać kolekcję książek. Klasa ta powinna mieć metodę addBook(Book $book), która będzie dodawać książkę do kolekcji oraz metodę listBooks(), która wyświetli listę tytułów wszystkich książek w bibliotece.

- Stwórz kilka obiektów autorów oraz kilka książek. Dodaj te książki do obiektu biblioteki i wywołaj metodę listBooks().

- Utwórz kilka obiektów czytelników (klasa Reader) i przetestuj metodę read() z klasy Book na tych obiektach.