<?php
/*
Template Name: Инвесторам
*/
?>
		<?php get_header();  ?>
        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-lg-8"> 
                <div class="content">
                    <h2>Калькулятор вкладов</h2>
                     <?php the_content(); ?>
                </div>

                <div class="calc">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="calc-programms">
                                <div class="calc-radio">
                                    <input type="radio" data-month="6" data-per="0.2" checked name="programms" id="first">
                                    <label for="first">
                                        <span>20% годовых <small>на 6 месяцев</small></span>
                                    </label>
                                </div>
                                <div class="calc-radio">
                                    <input type="radio" data-month="12" data-per="0.24" name="programms" id="second">
                                    <label for="second">
                                        <span>24% годовых <small>на 1 год</small></span>
                                    </label>
                                </div>
                                <div class="calc-radio">
                                    <input type="radio" data-month="24" data-per="0.26" name="programms" id="third">
                                    <label for="third">
                                        <span>26% годовых <small>на 2 года</small></span>
                                    </label>
                                </div>
                                <div class="calc-radio">
                                    <input type="radio" data-month="36" data-per="0.28" name="programms" id="fourth">
                                    <label for="fourth">
                                        <span>28% годовых <small>на 3 года</small></span>
                                    </label>
                                </div>
                                <div class="calc-radio">
                                    <input type="radio" data-month="48" data-per="0.36" name="programms" id="fifth">
                                    <label for="fifth">
                                        <span>32% годовых <small>на 4 года</small></span>
                                    </label>
                                    <div class="calc-popular">
                                        Популярная программа
                                    </div>
                                </div>
                            </div>
                            <div class="calc-legal">
                                    <p>Данная программа является демонстрационной, она показывает возможности по получения дохода от размещения вклада</p>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Укажите сумму инвестиций</h4>
                            <input type="text" class="calc-range" name="summ">
                            <div class="calc-summ_invest">
                                <span class="calc-summ_invest_label">Сумма:</span>
                                <span class="calc-summ_invest_num"><span>100</span> руб.</span>
                            </div>
                            <div>
                                <span class="calc-total">
                                    <strong><span id="total">110</span> руб.</strong><br>
                                    <small>Сумма через <span id="month"></span> месяцев</small>
                                </span>
                                <span class="calc-monthly">
                                    <strong><span>1</span> руб.</strong><br>
                                    <small>Ежемесячный доход</small>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                
  <?php get_footer(); ?>
