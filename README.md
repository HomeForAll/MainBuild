# Стандарты форматирования кода
Для PHP используем стандарты принятые группой PHP-FIG (за исключением пространств имен):      

[PSR-1 – Базовый стандарт оформления кода (перевод)](https://svyatoslav.biz/misc/psr_translation/#_PSR-1)  
[PSR-2 – Рекомендации по оформлению кода (перевод)](https://svyatoslav.biz/misc/psr_translation/#_PSR-2)   
[Описание всех стандартов группы PHP-FIG (первоисточник, на английском)](http://www.php-fig.org/psr)

## Краткая помощь по стандартам
#### Общая информация

Название  | Описание
------------- | -------------
Допустимые теги  | \<?php ?\>, \<?= ?\> 
Кодировка символов  | UTF-8 без BOM-байта
Отступы  | четыре пробела

#### Форматирование кода

Элемент  | Пример
------------- | -------------
Классы  | SiteController
Константы  | VERSION, DATE_APPROVED
Свойства  |  $camelCase
Методы  |  renameElement()
Ключевые слова  |  true, false и null
   
 
Пример охватывающий большинство правил:      
```
<?php
    
    class Foo extends Bar implements FooInterface
    {
        const VERSION = '2.0';
    
        private $camelCase;
            
        abstract public function sampleFunction();
        
        public function sampleFunction($a, $b = null)
        {
            if ($a === $b) {
                bar();
            } elseif ($a > $b) {
                $foo->bar($arg1);
            } else {
                BazClass::bar($arg2, $arg3);
            }
        }
     
        final public static function getVersion()
        {
            return self::VERSION;
        }
        
        public function runSwitch()
        {
            switch ($expr) {
                case 0:
                    echo 'Первый кейс';
                    break;
                case 1:
                    echo 'Второй кейс';
                case 2:
                case 3:
                case 4:
                    echo 'Четвертый кейс';
                default:
                    echo 'Default case';
                    break;
            }
        }
        
        public function runWhile()
        {
            while ($expr) {
                // тело конструкции
            }
        }
        
        public function runDoWhile()
        {
            do {
                // тело конструкции
            } while ($expr);
        }
        
        public function runFor()
        {
            for ($i = 0; $i < 10; $i++) {
                // тело for
            }
        }
        
        public function runForeach()
        {
            foreach ($iterable as $key => $value) {
                // тело foreach
            }
        }
        
        public function runTryCatch()
        {
            try {
                // тело try
            } catch (FirstExceptionType $e) {
                // тело catch
            } catch (OtherExceptionType $e) {
                // тело catch
            }
        }
    }
```
# Цикл внесения изменений в ветку DEV
Для начала работы над ошибкой, дефектом или разработки полученного задания, переключаемся в ветку **DEV** и получаем ее последнюю версию:  
```
git checkout dev
git pull origin dev
```
Создаем новую ветку из **DEV**, в названии должно присутствовать несколько слов указывающих с чем будет вестись работа: 
```
git checkout -b bug-login
git checkout -b implement_payment_system
```
Или другие подобные имена.

Вносим изменения в созданную ветку. За время вашей работы, в ветку **DEV**, дргуие разработчики уже могли внести изменения, 
поэтому снова получаем последние изменения, что бы избежать конфликтов:
```
git checkout dev
git pull origin dev
```
Затем вливаем все изменения произошедшие в ветке **DEV** в вашу ветку:
```
git checkout [НАЗВАНИЕ ВАШЕЙ ВЕТКИ]
git rebase dev
```

Если у вас возникли конфликты, решаем их.
После чего выполняем команду:
```
git push -f origin [НАЗВАНИЕ ВАШЕЙ ВЕТКИ]
```

Далее, создаем запрос **New pull request** > **Сreate Pull Request** на слияние вашей ветки с **DEV**:

![Новый запрос](http://images.lant.io/new_req.PNG)

![Создать запрос](http://images.lant.io/create_req.PNG)
