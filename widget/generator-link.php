<?php

namespace WEDKU\Widget;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;

if (!defined('ABSPATH')) exit;
class Generator_link extends Widget_Base
{
    public function get_name()
    {
        return 'generator_link';
    }
    public function get_title()
    {
        return __('CSWD Generator Link');
    }
    public function get_icon()
    {
        return 'eicon-editor-unlink';
    }
    public function get_categories()
    {
        return ['general'];
    }
    protected function _register_controls()
    {
        $this->start_controls_section(
            'section_field_id',
            [
                'label' => __('ID Undangan', 'CSWeding'),
            ]
        );
        $this->add_control(
            'form_labels',
            [
                'label' => __('Form Labels', 'CSWeding'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'CSWeding'),
                'label_off' => __('Hide', 'CSWeding'),
                'return_value' => 'yes',
                'separator' => 'before',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'field_id_label',
            [
                'label' => __('Label', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('ID Undangan', 'CSWeding')
            ]
        );
        $this->add_control(
            'field_id_placeholder',
            [
                'label' => __('Placeholder', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('romeo-juliet', 'CSWeding')
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'section_field_tamu',
            [
                'label' => __('Nama Tamu', 'CSWeding'),
            ]
        );
        $this->add_control(
            'field_tamu_label',
            [
                'label' => __('Label', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Nama Tamu Undangan', 'CSWeding')
            ]
        );
        $this->add_control(
            'field_tamu_placeholder',
            [
                'label' => __('Placeholder', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('nama tamu undangan', 'CSWeding')
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_field_mempelai1',
            [
                'label' => __('Nama Mempelai 1', 'CSWeding'),
            ]
        );
        $this->add_control(
            'field_mempelai1_label',
            [
                'label' => __('Label', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Nama mempelai 1', 'CSWeding')
            ]
        );
        $this->add_control(
            'field_mempelai1_placeholder',
            [
                'label' => __('Placeholder', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Romeo', 'CSWeding')
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_field_mempelai2',
            [
                'label' => __('Nama Mempelai 2', 'CSWeding'),
            ]
        );
        $this->add_control(
            'field_mempelai2_label',
            [
                'label' => __('Label', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Nama mempelai 2', 'CSWeding')
            ]
        );
        $this->add_control(
            'field_mempelai2_placeholder',
            [
                'label' => __('Placeholder', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Juliet', 'CSWeding')
            ]
        );
        $this->end_controls_section();

        // $this->start_controls_section(
        //     'section_field_sesi',
        //     [
        //         'label' => __('Sesi', 'CSWeding'),
        //     ]
        // );
        // $this->add_control(
        //     'field_sesi_label',
        //     [
        //         'label' => __('Label', 'CSWeding'),
        //         'type' => Controls_Manager::TEXT,
        //         'default' => __('Menambah Keterangan Sesi', 'CSWeding'),
        //     ]
        // );
        // $this->end_controls_section();

        $this->start_controls_section(
            'section_field_mulai',
            [
                'label' => __('Mulai', 'CSWeding'),
            ]
        );
        $this->add_control(
            'field_mulai_label',
            [
                'label' => __('Label', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Waktu Acara Mulai', 'CSWeding')
            ]
        );
        $this->add_control(
            'field_mulai_placeholder',
            [
                'label' => __('Placeholder', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Waktu acara mulai', 'CSWeding')
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_field_selesai',
            [
                'label' => __('Selesai', 'CSWeding'),
            ]
        );
        $this->add_control(
            'field_selesai_label',
            [
                'label' => __('Label', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Waktu Acara Selesai', 'CSWeding')
            ]
        );
        $this->add_control(
            'field_selesai_placeholder',
            [
                'label' => __('Placeholder', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Waktu acara selesai', 'CSWeding')
            ]
        );
        $this->end_controls_section();

        // $this->start_controls_section(
        //     'section_field_ucapan',
        //     [
        //         'label' => __('Ucapan', 'CSWeding'),
        //     ]
        // );
        // $this->add_control(
        //     'field_ucapan_label',
        //     [
        //         'label' => __('Label', 'CSWeding'),
        //         'type' => Controls_Manager::TEXT,
        //         'default' => __('Text Ucapan', 'CSWeding')
        //     ]
        // );
        // $this->add_control(
        //     'field_ucapan_description',
        //     [
        //         'label' => __('Description', 'CSWeding'),
        //         'type' => Controls_Manager::TEXTAREA,
        //         'rows' => 15,
        //         'default' => __('Default Description', 'CSWeding'),
        //         'placeholder' => __('Type your description here', 'CSWeding'),
        //     ]
        // );
        // $this->end_controls_section();

        $this->start_controls_section(
            'section_field_generate_button',
            [
                'label' => __('Tombol Generate Link', 'CSWeding'),
            ]
        );
        $this->add_control(
            'field_generate_button_label',
            [
                'label' => __('Text Tombol', 'CSWeding'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Siapkan Link Undangan', 'CSWeding')
            ]
        );
        $this->end_controls_section();



        // tab style setting
        $this->styletab();
    }
    function styletab()
    {
        // text label seting
        $this->start_controls_section(
            'section_label_style',
            [
                'label'                 => __('Labels', 'CSWeding'),
                'tab'                   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'label_text_color',
            [
                'label'                 => __('Text Color', 'CSWeding'),
                'type'                  => Controls_Manager::COLOR,
                'selectors'             => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit label' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'                  => 'CSWeding_text_labels_typography',
                'label'                 => __('Typography', 'CSWeding'),
                'selector'              => '{{WRAPPER}} .wdp-form-wrapper-kit label',
            ]
        );

        $this->end_controls_section();

        // button setting
        $this->start_controls_section(
            'section_button_style',
            [
                'label' => __('Form Button', 'CSWeding'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('tabs_button_style');

        $this->start_controls_tab(
            'tab_button_normal',
            [
                'label' => __('Normal', 'CSWeding'),
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => __('Text Color', 'CSWeding'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"], {{WRAPPER}} .wdp-form-wrapper-kit button' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'typography',
                'label' => __('Typography', 'CSWeding'),
                'scheme' => Scheme_Typography::TYPOGRAPHY_4,
                'selector' => '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"], {{WRAPPER}} .wdp-form-wrapper-kit button',
            ]
        );

        $this->add_control(
            'background_color',
            [
                'label' => __('Background Color', 'CSWeding'),
                'type' => Controls_Manager::COLOR,
                'scheme' => [
                    'type' => Scheme_Color::get_type(),
                    'value' => Scheme_Color::COLOR_4,
                ],
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"], {{WRAPPER}} .wdp-form-wrapper-kit button' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __('Border', 'CSWeding'),
                'placeholder' => '1px',
                'default' => '1px',
                'selector' => '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"], {{WRAPPER}} .wdp-form-wrapper-kit button',
            ]
        );

        $this->add_control(
            'border_radius',
            [
                'label' => __('Border Radius', 'CSWeding'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"], {{WRAPPER}} .wdp-form-wrapper-kit button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'text_padding',
            [
                'label' => __('Text Padding', 'CSWeding'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"], {{WRAPPER}} .wdp-form-wrapper-kit button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_button_hover',
            [
                'label' => __('Hover', 'CSWeding'),
            ]
        );

        $this->add_control(
            'hover_color',
            [
                'label' => __('Text Color', 'CSWeding'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"]:hover, {{WRAPPER}} .wdp-form-wrapper-kit button:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_background_hover_color',
            [
                'label' => __('Background Color', 'CSWeding'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"]:hover, {{WRAPPER}} .wdp-form-wrapper-kit button:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_border_color',
            [
                'label' => __('Border Color', 'CSWeding'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wdp-form-wrapper-kit input[type="submit"]:hover, {{WRAPPER}} .wdp-form-wrapper-kit button:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }


    protected function render()
    {
        $url_home = home_url(add_query_arg(array(), $wp->request));
        $settings = $this->get_settings();
        $this->add_render_attribute('form_wrapper', 'class', 'wdp-form-wrapper-kit');
        $labels_class = !$settings['form_labels'] ? 'elementor-screen-only' : '';
        $field_id_label = $settings['field_id_label'];

        $field_tamu_label = $settings['field_tamu_label'];
        $field_tamu_value = '';
        $field_tamu_class = 'wdp-form-nama';

        $field_mempelai1_label = $settings['field_mempelai1_label'];
        $field_mempelai1_value = '';
        $field_mempelai1_class = 'wdp-form-nama';

        $field_mempelai2_label = $settings['field_mempelai2_label'];
        $field_mempelai2_value = '';
        $field_mempelai2_class = 'wdp-form-nama';

        $field_mulai_label = $settings['field_mulai_label'];
        $field_mulai_value = '';
        $field_mulai_class = 'wdp-form-nama';

        $field_selesai_label = $settings['field_selesai_label'];
        $field_selesai_value = '';
        $field_selesai_class = 'wdp-form-nama';

        // $field_ucapan_label = $settings['field_ucapan_label'];
        // $field_selesai_value = '';
        // $field_selesai_class = 'wdp-form-nama';

        $field_submit_text = $settings['field_generate_button_label'];
        if (!$field_submit_text) {
            $field_submit_text = __('Generate URL', 'CSWeding');
        }

        $this->add_render_attribute('field_id_label', 'class', $labels_class);
        $this->add_render_attribute('field_tamu_label', 'type', 'text');
        $this->add_render_attribute('field_mempelai1_label', 'type', 'text');
        $this->add_render_attribute('field_mempelai2_label', 'type', 'text');
        $this->add_render_attribute('field_mulai_label', 'type', 'text');
        $this->add_render_attribute('field_selesai_label', 'type', 'text');
        // $this->add_render_attribute('field_ucapan_label', 'type', 'textarea');

?>
        <div <?php echo $this->get_render_attribute_string('form_wrapper'); ?>>
            <div class="CSWeding-form-fields-wrapper">
                <form action="action.php" id="postData" class="generate-links-<?php echo $this->get_id(); ?>">
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label <?php echo $this->get_render_attribute_string('field_id_label'); ?>>
                                <?php echo $field_id_label; ?> (https://unityinvitation.com/romeo-juliet)
                            </label>
                        </div>
                        <input type="text" class="id_undangan" id="id_undangan" placeholder="<?php echo $settings['field_id_placeholder'] ?>" name="id_undangan" required>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label <?php echo $this->get_render_attribute_string('field_tamu_label'); ?>>
                                <?php echo $field_tamu_label; ?>
                            </label>
                        </div>
                        <input type="text" class="" id="nama_tamu" placeholder="<?php echo $settings['field_tamu_placeholder'] ?>" name="nama_tamu" required>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label for="">Keterangan Di/Dari/Asal</label>
                        </div>
                        <br>
                        <div class="groups-forms">
                            <select id="keterangan_asal" name="keterangan_asal">
                                <option value="+Di+:+">Di:</option>
                                <option value="+Dari+:+">Dari:</option>
                                <option value="+Asal+:+">Asal:</option>
                            </select>
                            <input type="text" class="" id="asal" name="asal" placeholder="Kota/Kabupaten">
                        </div>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label <?php echo $this->get_render_attribute_string('field_mempelai1_label'); ?>>
                                <?php echo $field_mempelai1_label; ?>
                            </label>
                        </div>
                        <input type="text" class="" id="mempelai1" placeholder="<?php echo $settings['field_mempelai1_placeholder'] ?>" name="mempelai1" required>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label <?php echo $this->get_render_attribute_string('field_mempelai2_label'); ?>>
                                <?php echo $field_mempelai2_label; ?>
                            </label>
                        </div>
                        <input type="text" class="" id="mempelai2" placeholder="<?php echo $settings['field_mempelai2_placeholder'] ?>" name="mempelai2" required>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label for="keterangan_sesi">Menambah keterangan Sesi</label>
                        </div>
                        <br>
                        <select id="keterangan_sesi" class="keterangan_sesi" name="sesi">
                            <option value=""></option>
                            <option value="Sesi 1">Sesi 1</option>
                            <option value="Sesi 2">Sesi 2</option>
                            <option value="Sesi 3">Sesi 3</option>
                            <option value="Sesi 4">Sesi 4</option>
                        </select>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label <?php echo $this->get_render_attribute_string('field_mulai_label'); ?>>
                                <?php echo $field_mulai_label; ?>
                            </label>
                        </div>
                        <input type="text" class="" id="mulai_acara" placeholder="<?php echo $settings['field_mulai_placeholder'] ?>" name="mulai_acara" required>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label for="perantara">Perantara</label>
                        </div>
                        <br>
                        <select id="perantara" name="sesi" placeholder="s/d">
                            <option value="s/d">s/d</option>
                            <option value="Hingga">Hingga</option>
                            <option value="-">-</option>
                            <option value="Sampai">Sampai</option>
                        </select>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label <?php echo $this->get_render_attribute_string('field_selesai_label'); ?>>
                                <?php echo $field_selesai_label; ?>
                            </label>
                        </div>
                        <input type="text" class="" id="selesai_acara" placeholder="<?php echo $settings['field_selesai_placeholder'] ?>" name="selesai_acara" required>
                    </div>

                    <div class="form-items">
                        <div class="wdp-form-nama" style="margin-bottom: 10px;">
                            <label for="ucapan">Ucapan</label>
                            <!-- <span class="titles_">Variables:</span> -->
                            <!-- <br> -->
                            <!-- <p>{namaTamu}, {nama_mempelai1}, {nama_mempelai2}, {link_undangan}, {sesi}, {waktu_acara_mulai},{perantara},{waktu_acara_selesai}</p> -->
                            <span class="btn_variable_ucapan" data-val="{namaTamu}">{namaTamu}</span>
                            <span class="btn_variable_ucapan" data-val="{nama_mempelai1}">{nama_mempelai1}</span>
                            <span class="btn_variable_ucapan" data-val="{nama_mempelai2}">{nama_mempelai2}</span>
                            <span class="btn_variable_ucapan" data-val="{link_undangan}">{link_undangan}</span>
                            <span class="btn_variable_ucapan" data-val="{sesi}">{sesi}</span>
                            <span class="btn_variable_ucapan" data-val="{waktu_acara_mulai}">{waktu_acara_mulai}</span>
                            <span class="btn_variable_ucapan" data-val="{perantara}">{perantara}</span>
                            <span class="btn_variable_ucapan" data-val="{waktu_acara_selesai}">{waktu_acara_selesai}</span>
                        </div>
                        <textarea name="" style="height: 700px;" class="ucapan_text" id="ucapan" rows="30" cols="20">Assalamu'alaikum Warahmatulluhi Wabarakatu 
Bismillahirahmanirrahim. 

Yth. {namaTamu}

Dengan segala kerendahan hati dan dengan ungkapan syukur atas karunia Tuhan Yang Maha Esa, izinkan kami mengundang Bapak/Ibu/Saudara/i untuk hadir dan memberikan doa restu pada acara pernikahan kami.

{nama_mempelai1} & {nama_mempelai2}

Klik tautan berikut untuk membuka undangan :

{link_undangan}

Merupakan sebuah kehormatan dan kebahagian bagi kami apabila Bapak/Ibu/Saudara/i berkenan dan memberikan doa restu di acara pernikahan kami.
Mohon maaf prihal undangan hanya di bagikan melalui pesan ini.

Berkaitan dengan adanya pandemi Covid-19, sekiranya agar tetap mematuhi protokol Kesehatan yang berlaku dengan memakai masker selama acara, menjaga jarak di area lokasi dan mencuci tangan atau menggunakan disinfektan sebelum memasuki acara.

Atas kehadiran dan doa restunya, kami ucapkan terimakasih.

Wassalamu'alaikum Wr. Wb. </textarea>
                    </div>
                    <!-- <textarea name="" class="textnya" id="hasilll">halo %nama%, selamat datang :)</textarea> -->
                    <div class="form-items">
                        <button type="submit" class="wdp-form-button elementor%s-align-" id="submit_create_invitation"><?php echo $field_submit_text; ?></button>
                    </div>
                    <div class="form-items">
                        <div class="wdp-form-nama">
                            <label for="link_undangan">Ambil Link Undangan</label>
                        </div>
                        <input type="text" id="link_undangan" name="link_undangan" readonly>
                        <div>
                            <button id="copykit" type="button">Slain Link</button>
                            <a id="linkkit" target="_blank"><button type="button" class="wdp-form-button elementor%s-align-">Lihat Link</button></a>
                            <a href="#" id="wa_link_share" target="_blank"><button type="button" style="margin-top:10px;" class="wdp-form-button elementor%s-align-">Share to Whatsapp</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            let submit = document.querySelector('#submit_create_invitation');
            let result = document.querySelector('#link_undangan');
            let undangan = document.querySelector('#id_undangan');
            let tamu = document.querySelector('#nama_tamu');
            let asal = document.querySelector('#asal');
            let keterangan_asal = document.querySelector('#keterangan_asal');
            let copy = document.querySelector('#copykit');
            let form = document.querySelector('#postData');
            let ucapan = document.querySelector('#ucapan');

            var nama_mempelai1 = document.querySelector('#mempelai1'),
                nama_mempelai2 = document.querySelector('#mempelai2'),
                keterangan_sesi = document.querySelector('#keterangan_sesi'),
                mulai_acara = document.querySelector('#mulai_acara'),
                perantara = document.querySelector('#perantara'),
                selesai_acara = document.querySelector('#selesai_acara');

            String.prototype.replaceAll = function(obj) {
                let finalString = '';
                let word = this;
                for (let each of word) {
                    for (const o in obj) {
                        const value = obj[o];
                        if (each == o) {
                            each = value;
                        }
                    }
                    finalString += each;
                }

                return finalString;
            };
            form.addEventListener('submit', event => {
                event.preventDefault();
                const data = new URLSearchParams();
                for (const p of new FormData(form)) {
                    data.append(p[0], p[1]);
                }
                fetch('action.php', {
                        method: 'POST',
                        body: data
                    })
                    .then(response => response.text())
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => console.log(error));
            });
            submit.onclick = (r) => {
                if (undangan.value.length !== 0 && tamu.value.length !== 0) {
                    r.preventDefault(), r.stopPropagation();
                    // var n = t(e(r.target), !1);  
                    let undanganReplace = undangan.value.replace(/ /g, '+');
                    let keterangan_asalReplace = keterangan_asal.value.replace(/ /g, '+');
                    let tamuReplace = tamu.value.replace(/ /g, '+');
                    let asalReplace = asal.value.replace(/ /g, '+');
                    undanganReplace = undanganReplace.replace("&", "%26");
                    tamuReplace = tamuReplace.replace("&", "dan");
                    var home_url = `<?php echo $url_home; ?>/${undanganReplace}?to=${tamuReplace}${keterangan_asalReplace}${asalReplace}`;
                    jQuery('#link_undangan').val(home_url);
                    document.getElementById("linkkit").href = result.value;
                    var textnya = ucapan.value;
                    let res = textnya.replace(/{namaTamu}/g, tamu.value)
                        .replace(/{nama_mempelai1}/g, nama_mempelai1.value)
                        .replace(/{nama_mempelai2}/g, nama_mempelai2.value)
                        .replace(/{link_undangan}/g, home_url)
                        .replace(/{sesi}/g, keterangan_sesi.value)
                        .replace(/{waktu_acara_mulai}/g, mulai_acara.value)
                        .replace(/{perantara}/g, perantara.value)
                        .replace(/{waktu_acara_selesai}/g, selesai_acara.value);
                    res = encodeURIComponent(res) //res.replace(/\r?\n/g, '%0A');
                    var wa_link_share = 'https://api.whatsapp.com/send?text=' + res;
                    // var text = $("#infoartist").val();
                    document.getElementById('wa_link_share').href = wa_link_share;
                }
            }
            copy.onclick = () => {
                if (result.value.length !== 0) {
                    result.select();
                    result.setSelectionRange(0, 99999);
                    document.execCommand("Copy");
                }
            }

            jQuery('.btn_variable_ucapan').on('click', function() {
                // var cursorPos = jQuery('.ucapan_text').prop('selectionStart');
                // var v = jQuery('.ucapan_text').val();
                // var textBefore = v.substring(0, cursorPos);
                // var textAfter = v.substring(cursorPos, v.length);
                // jQuery('.ucapan_text').val(textBefore + jQuery(this).data('val') + textAfter);

                handleButtonClick(jQuery(this).data('val'));
            });

            function handleButtonClick(insertToken) {
                var inputValue = jQuery('.ucapan_text').val();
                // var insertToken = inputValue;
                var insertTokenAt = jQuery('.ucapan_text').prop("selectionEnd");
                var nextSelectionEnd = (insertTokenAt + insertToken.length);
                jQuery('.ucapan_text').val(
                    inputValue.slice(0, insertTokenAt) +
                    insertToken +
                    inputValue.slice(insertTokenAt)
                );
                jQuery('.ucapan_text')
                    .prop("selectionStart", nextSelectionEnd)
                    .prop("selectionEnd", nextSelectionEnd)
                    .focus();

            }
        </script>
<?php
    }
}
