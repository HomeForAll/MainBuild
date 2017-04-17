<h3>Нежилая - Арендовать - Офисная площадь</h3>
<fieldset>
    <legend>Базовый раздел</legend><br>
    <b >Цена</b><br>
    <label for="price">Стоимость:</label><br>
    <input id="price" name="price" <?php inputToInput("price"); ?> type="text" ><br>
    <label for="lease">Срок аренды</label><br>
    <select name="lease" id="lease">
        <option value="0">---</option>
        <option value="80" <?php inputToSelect('lease','80'); ?> >Более года</option>
        <option value="145" <?php inputToSelect('lease','145'); ?> >Год</option>
        <option value="79" <?php inputToSelect('lease','79'); ?> >Месяц</option>
        <option value="138" <?php inputToSelect('lease','138'); ?> >Неделя</option>
        <option value="37" <?php inputToSelect('lease','37'); ?> >День</option>
    </select><br>
    <b >Расположение</b><br>
    <input type="text" name="address" <?php inputToInput("address"); ?> id="suggest"><br><span >Страна: </span><br><span style="margin-left: 40px">Область: </span><br><span style="margin-left: 40px">Город: </span><br><span style="margin-left: 40px">Район: </span><br><span style="margin-left: 40px">Дом: </span><br><div id="ymap" style="margin: 0 auto; width: 700px; height: 700px; background: #000;"></div>
    <script>
        ymaps.ready(function () {
            var map = new ymaps.Map("ymap", {
                center: [55.451332, 37.369336],
                zoom: 10,
                controls: ['fullscreenControl', 'typeSelector', 'geolocationControl', 'zoomControl']
            });

            window.suggests = new ymaps.SuggestView("suggest", {width: 300, offset: [0, 4], results: 20});
        });
    </script><label for="distance_from_mkad_or_metro">Удаленность от МКАД/метро:</label><br>
    <input id="distance_from_mkad_or_metro" name="distance_from_mkad_or_metro" <?php inputToInput("distance_from_mkad_or_metro"); ?> type="text" ><br>
    <label for="bargain">Торг</label><br>
    <select name="bargain" id="bargain">
        <option value="0">---</option>
        <option value="85" <?php inputToSelect('bargain','85'); ?> >Невозможен</option>
        <option value="13" <?php inputToSelect('bargain','13'); ?> >Возможен</option>
    </select><br>
    <label for="object_located">Объект размещен</label><br>
    <select name="object_located" id="object_located">
        <option value="0">---</option>
        <option value="22" <?php inputToSelect('object_located','22'); ?> >Риэлтором</option>
        <option value="21" <?php inputToSelect('object_located','21'); ?> >Собственником</option>
    </select><br>
    <br></fieldset><br>
<fieldset>
    <legend> Ремонт и обустройство</legend><br>
    <b >Жилищно-коммунальные услуги</b><br>
    <label >Электричество <input type="hidden" name="electricity" value=""> <input type="checkbox" name="electricity" <?php inputToCheckbox("electricity"); ?> ></label><br>
    <label for="electricity">Кол-во кВт:</label><br>
    <input name="electricity" <?php inputToInput("electricity"); ?> type="text" >
    <label for="sanitation" >Водопровод и канализация</label><br>
    <select name="sanitation" id="sanitation" >
        <option value="0">---</option>
        <option value="47" <?php inputToSelect('sanitation','47'); ?> >Есть</option>
        <option value="84" <?php inputToSelect('sanitation','84'); ?> >Нет</option>
    </select><br>
    <label >Возможность проводки <input type="hidden" name="possible_to_post" value=""> <input type="checkbox" name="possible_to_post" <?php inputToCheckbox("possible_to_post"); ?> ></label><br>
    <label >Описание <input type="text" name="sanitation_description" <?php inputToInput("sanitation_description"); ?> ></label><br>
    <label for="sanitation" >Наличие санузлов</label><br>
    <label for="">Количество:</label><br>
    <input name="bathroom_number" <?php inputToInput("bathroom_number"); ?> type="text" >
    <label for="">Расположение:</label><br>
    <select name="bathroom_location" id="bathroom_location" >
        <option value="0">---</option>
        <option value="" <?php inputToSelect('bathroom_location',''); ?> >---</option>
    </select><br>
    <label >Описание <input type="text" name="bathroom_description" <?php inputToInput("bathroom_description"); ?> ></label><br>
    <label for="furnish">Отделка</label><br>
    <select name="furnish" id="furnish">
        <option value="0">---</option>
        <option value="141" <?php inputToSelect('furnish','141'); ?> >Без ремонта</option>
        <option value="65" <?php inputToSelect('furnish','65'); ?> >Незавершенный ремонт</option>
        <option value="107" <?php inputToSelect('furnish','107'); ?> >Требуется ремонт</option>
        <option value="106" <?php inputToSelect('furnish','106'); ?> >Требуется косметический ремонт</option>
        <option value="57" <?php inputToSelect('furnish','57'); ?> >Хорошая отделка</option>
        <option value="64" <?php inputToSelect('furnish','64'); ?> >Высококачественная отделка</option>
        <option value="46" <?php inputToSelect('furnish','46'); ?> >Эксклюзивного качества</option>
    </select><br>
    <label for="parking">Парковка</label><br>
    <select name="parking" id="parking">
        <option value="0">---</option>
        <option value="81" <?php inputToSelect('parking','81'); ?> >Многоуровневый паркинг</option>
        <option value="132" <?php inputToSelect('parking','132'); ?> >Подземная парковка</option>
        <option value="52" <?php inputToSelect('parking','52'); ?> >Гаражный комплекс</option>
        <option value="7" <?php inputToSelect('parking','7'); ?> >Придомовой гараж</option>
        <option value="82" <?php inputToSelect('parking','82'); ?> >Муниципальная</option>
        <option value="5" <?php inputToSelect('parking','5'); ?> >Отсутствует</option>
    </select><br>
    <label for="municipal">Муниципальная</label><br>
    <select name="municipal" id="municipal">
        <option value="0">---</option>
        <option value="94" <?php inputToSelect('municipal','94'); ?> >Платная</option>
        <option value="51" <?php inputToSelect('municipal','51'); ?> >Бесплатная</option>
    </select><br>
    <label for="fencing">Ограждение</label><br>
    <select name="fencing" id="fencing">
        <option value="0">---</option>
        <option value="84" <?php inputToSelect('fencing','84'); ?> >Нет</option>
        <option value="147" <?php inputToSelect('fencing','147'); ?> >Да</option>
    </select><br>
    <label for="material">Материал</label><br>
    <select name="material" id="material">
        <option value="0">---</option>
        <option value="143" <?php inputToSelect('material','143'); ?> >Кованая ограда</option>
        <option value="75" <?php inputToSelect('material','75'); ?> >Металлические прутья</option>
        <option value="19" <?php inputToSelect('material','19'); ?> >Кирпич</option>
        <option value="31" <?php inputToSelect('material','31'); ?> >Бетон</option>
        <option value="122" <?php inputToSelect('material','122'); ?> >Камень</option>
        <option value="38" <?php inputToSelect('material','38'); ?> >Профнастил</option>
        <option value="142" <?php inputToSelect('material','142'); ?> >Дерево</option>
        <option value="98" <?php inputToSelect('material','98'); ?> >Пластик</option>
    </select><br>
    <span >Безопасность</span><br>
    <label >Сигнализация <input type="hidden" name="signaling" value=""> <input type="checkbox" name="signaling" <?php inputToCheckbox("signaling"); ?> ></label><br>
    <label >Видеонаблюдение <input type="hidden" name="cctv" value=""> <input type="checkbox" name="cctv" <?php inputToCheckbox("cctv"); ?> ></label><br>
    <label >Домофон <input type="hidden" name="intercom" value=""> <input type="checkbox" name="intercom" <?php inputToCheckbox("intercom"); ?> ></label><br>
    <label >Охрана <input type="hidden" name="security" value=""> <input type="checkbox" name="security" <?php inputToCheckbox("security"); ?> ></label><br>
    <label >Консьерж <input type="hidden" name="concierge" value=""> <input type="checkbox" name="concierge" <?php inputToCheckbox("concierge"); ?> ></label><br>
    <br></fieldset><br><fieldset>
    <legend>Исходные параметры</legend><br>
    <label for="space">Площадь:</label><br>
    <input id="space" name="space" <?php inputToInput("space"); ?> type="text" ><br>
    <label for="ceiling_height">Высота потолков:</label><br>
    <input id="ceiling_height" name="ceiling_height" <?php inputToInput("ceiling_height"); ?> type="text" ><br>
    <label for="number_of_floors">Количество этажей:</label><br>
    <input id="number_of_floors" name="number_of_floors" <?php inputToInput("number_of_floors"); ?> type="text" ><br>
    <label for="type_of_construction">Вид постройки</label><br>
    <select name="type_of_construction" id="type_of_construction">
        <option value="0">---</option>
        <option value="131" <?php inputToSelect('type_of_construction','131'); ?> >Вид постройки</option>
    </select><br>
    <label for="number_of_rooms">Количество комнат:</label><br>
    <input id="number_of_rooms" name="number_of_rooms" <?php inputToInput("number_of_rooms"); ?> type="text" ><br>
    <label for="year_of_construction">Год постройки/окончания строительства:</label><br>
    <input id="year_of_construction" name="year_of_construction" <?php inputToInput("year_of_construction"); ?> type="text" ><br>
    <label for="building_type">Тип здания</label><br>
    <select name="building_type" id="building_type">
        <option value="0">---</option>
        <option value="108" <?php inputToSelect('building_type', '108'); ?> >Жилое</option>
        <option value="8" <?php inputToSelect('building_type', '8'); ?> >Административное</option>
    </select><br>
    <label for="wall_material">Материал стен</label><br>
    <select name="wall_material" id="wall_material">
        <option value="49" <?php inputToSelect('wall_material', '49'); ?> >Фахверк</option>
        <option value="19" <?php inputToSelect('wall_material', '19'); ?> >Кирпич</option>
        <option value="105" <?php inputToSelect('wall_material', '105'); ?> >Железобетон</option>
        <option value="78" <?php inputToSelect('wall_material', '78'); ?> >Монолит</option>
        <option value="96" <?php inputToSelect('wall_material', '96'); ?> >Пеноблок</option>
        <option value="55" <?php inputToSelect('wall_material', '55'); ?> >Газосиликатные блоки</option>
        <option value="28" <?php inputToSelect('wall_material', '28'); ?> >Шлакоблоки</option>
        <option value="27" <?php inputToSelect('wall_material', '27'); ?> >Рубленое дерево</option>
        <option value="24" <?php inputToSelect('wall_material', '24'); ?> >Лафет</option>
        <option value="112" <?php inputToSelect('wall_material', '112'); ?> >Оцилиндрованное бревно</option>
        <option value="102" <?php inputToSelect('wall_material', '102'); ?> >Профилированный брус</option>
        <option value="56" <?php inputToSelect('wall_material', '56'); ?> >Клееный брус</option>
        <option value="0">---</option>
    </select><br>
    <label for="roofing">Кровля</label><br>
    <select name="roofing" id="roofing">
        <option value="0">---</option>
        <option value="127" <?php inputToSelect('roofing','127'); ?> >Временная</option>
        <option value="88" <?php inputToSelect('roofing','88'); ?> >Ондулин</option>
        <option value="118" <?php inputToSelect('roofing','118'); ?> >Шифер</option>
        <option value="122" <?php inputToSelect('roofing','122'); ?> >Камень</option>
        <option value="123" <?php inputToSelect('roofing','123'); ?> >Солома</option>
        <option value="129" <?php inputToSelect('roofing','129'); ?> >Черепица</option>
        <option value="18" <?php inputToSelect('roofing','18'); ?> >Бескобетонная черепица</option>
        <option value="76" <?php inputToSelect('roofing','76'); ?> >Металлочерепица</option>
        <option value="34" <?php inputToSelect('roofing','34'); ?> >Медь</option>
        <option value="67" <?php inputToSelect('roofing','67'); ?> >Железо</option>
    </select><br>
    <label for="foundation">Фундамент</label><br>
    <select name="foundation" id="foundation">
        <option value="0">---</option>
        <option value="140" <?php inputToSelect('foundation','140'); ?> >Без фундамента</option>
        <option value="58" <?php inputToSelect('foundation','58'); ?> >Ростверк</option>
        <option value="109" <?php inputToSelect('foundation','109'); ?> >Ленточный</option>
        <option value="125" <?php inputToSelect('foundation','125'); ?> >Шведская плита</option>
        <option value="120" <?php inputToSelect('foundation','120'); ?> >Монолитная плита</option>
    </select><br>
    <br></fieldset>
<fieldset>
    <legend>Документы</legend>
    <br>
    <label for="lease_contract">Договор аренды </label>
    <input type="file" name="lease_contract" multiple accept=""/>
    <label for="lease_contract">Документы на право владения </label>
    <input type="file" name="documents_on_tenure" multiple accept=""/>
    <br>
</fieldset><br>
<fieldset>
    <legend> Вложения</legend>
    <label for="planning_project">Проект планировки</label>
    <input type="file" name="planning_project" multiple accept=""/>
    <label for="three_d_project">3d проект</label>
    <input type="file" name="three_d_project" multiple accept=""/>
    <label for="video">Видео</label>
    <input type="file" name="video" multiple accept=""/>
</fieldset>