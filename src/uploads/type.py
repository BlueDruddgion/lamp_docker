from selenium.webdriver.support.color import Color
from app import setup_driver, save_to_json

def damage_calculator(damage):
    if not damage:
        damage = 1
    elif damage == '½':
        damage = 0.5
    else:
        damage = int(damage)
    return damage

def get_type(driver):
    types = []
    type_table = driver.find_element_by_xpath('//*[@id="main"]/div[2]/div[2]/div/table')
    names = [x.get_attribute('title') for x in type_table.find_elements_by_xpath('./thead/tr/th[position() > 1]/a')]
    bg_color = [Color.from_string(x.value_of_css_property('background-color')).hex for x in type_table.find_elements_by_xpath('./thead/tr/th[position() > 1]/a')]
    for i in range(len(names)):
        types.append({
            'Name': names[i],
            'Background color': bg_color[i],
            'Damage to': {
                x: damage_calculator(y.get_attribute('innerHTML')) for x, y in zip(names, type_table.find_elements_by_xpath('./tbody/tr[{}]/td'.format(i + 1)))
            },
            # 'Defense from': {
            #     x: damage_calculator(y.get_attribute('innerHTML')) for x, y in zip(names, type_table.find_elements_by_xpath('./tbody/tr/td[{}]'.format(i + 1)))
            # }
        })
    return types

def main(url):
    driver = setup_driver()
    driver.get(url)
    types = get_type(driver)
    # print(types)
    save_to_json(types, 'pokemon_type.json')
    driver.quit()

if __name__ == '__main__':
    main('https://pokemondb.net/type')