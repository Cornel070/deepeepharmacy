@extends('layouts.frontend-master')
    @section('content')
            <div class="mediz-page-title-wrap  mediz-style-custom mediz-left-align">
                <div class="mediz-header-transparent-substitute"></div>
                <div class="mediz-page-title-overlay"></div>
                <div class="mediz-page-title-container mediz-container">
                    <div class="mediz-page-title-content mediz-item-pdlr">
                        <h1 class="mediz-page-title">Know Your Drug: <b>{{ $drug->name??'No drug found' }}</b></h1>
                        <div class="mediz-page-caption">Understand the medication you're on</div>
                    </div>
                </div>
            </div>
            <div class="mediz-breadcrumbs">
                <div class="mediz-breadcrumbs-container mediz-container">
                    <div class="mediz-breadcrumbs-item mediz-item-pdlr">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Mediz - Hospital." href="index.html" class="/"><span property="name">Home </span></a>
                        <meta property="position" content="1">
                        </span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Our Services." href="{{ route('services') }}" class="post post-page" ><span property="name">Our Services</span></a>
                        <meta property="position" content="2">
                        </span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Know Your Drugs 
                        </span>
                        <meta property="position" content="3">
                        </span>
                    </div>
                </div>
            </div>

            <div class="mediz-page-wrapper" id="mediz-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 0px 10px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" id="gdlr-core-column-57301">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="{{ asset('assets/drugs/'.$drug->drug_img) }}" alt="" width="277" height="316" title="pic1-doc-departent" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-82064">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 15px 0px 0px 0px;padding: 0px 0px 65px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #171717 ;">{{ $drug->name }}<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                            <p>{{ $drug->description }}</p><br>

                                                            {{-- <p>Ibuprofen is used to reduce fever and treat pain or inflammation caused by many conditions such as headache, toothache, back pain, arthritis, menstrual cramps, or minor injury.</p><br>

                                                            <p>Ibuprofen is used in adults and children who are at least 6 months old.</p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                        <ul>
                                                            <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                                <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">CF-related diabetes (monthly)</span></div>
                                                            </li>
                                                            <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                                <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Gastrointestinal (monthly)</span></div>
                                                            </li>
                                                            <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                                <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">CF-related liver disease (monthly)</span></div>
                                                            </li>
                                                            <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left" style="margin-top: 4px ;margin-right: 11px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4d93e9 ;" ></i></span>
                                                                <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="color: #5a5a5a ;font-size: 15px ;font-weight: 400 ;text-transform: none ;letter-spacing: 0px ;">Sweat testing (three times per month)</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="cl-dpment" id="gdlr-core-column-71817">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="max-width: 87px ;margin-left: auto ;margin-right: auto ;"><img src="upload/department-icon-1.png" alt="" width="140" height="140" title="department-icon-1" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Central Nervous System</h3></div>
                                                            <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                                <p>Open visitation with only two visitors in a room at any given time. No one under 12 years of age may.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="cl-dpment" id="gdlr-core-column-83188">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="max-width: 87px ;margin-left: auto ;margin-right: auto ;"><img src="upload/department-icon-2.png" alt="" width="150" height="150" title="department-icon-2" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Allergic Disorders</h3></div>
                                                            <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                                <p>Open visitation with only two visitors in a room at any given time. No one under 12 years of age may.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="cl-dpment" id="gdlr-core-column-2176">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr">
                                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="max-width: 87px ;margin-left: auto ;margin-right: auto ;"><img src="upload/department-icon-3.png" alt="" width="149" height="149" title="department-icon-3" /></div>
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-title-wrap">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Neoplastic Disorders</h3></div>
                                                            <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                                <p>Open visitation with only two visitors in a room at any given time. No one under 12 years of age may.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-18799">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title-icon gdlr-core-left-align gdlr-core-icon-pos-left">
                                                        @if($drug->how_to_take)
                                                        <div class="gdlr-core-accordion-item-tab clearfix  gdlr-core-active">
                                                            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                            <div class="gdlr-core-accordion-item-content-wrapper">
                                                                <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">How should I take {{ $drug->name}}?</h4>
                                                                <div class="gdlr-core-accordion-item-content">
                                                                    <p>{{ $drug->how_to_take}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($drug->avoided)
                                                        <div class="gdlr-core-accordion-item-tab clearfix ">
                                                            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                            <div class="gdlr-core-accordion-item-content-wrapper">
                                                                <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">What should I avoid?</h4>
                                                                <div class="gdlr-core-accordion-item-content">
                                                                    <p>{{ $drug->avoided }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($drug->side_effects)
                                                        <div class="gdlr-core-accordion-item-tab clearfix ">
                                                            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                            <div class="gdlr-core-accordion-item-content-wrapper">
                                                                <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">{{ $drug->name }} side effects</h4>
                                                                <div class="gdlr-core-accordion-item-content">
                                                                    <p>{{ $drug->side_effects }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($drug->dosage)
                                                        <div class="gdlr-core-accordion-item-tab clearfix ">
                                                            <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                            <div class="gdlr-core-accordion-item-content-wrapper">
                                                                <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content" style="font-size: 16px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">{{ $drug->name }} dosing information</h4>
                                                                <div class="gdlr-core-accordion-item-content">
                                                                    <p>
                                                                        {{ $drug->dosage }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #171717 ;">Chest CT Scan<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 20px ;">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 19px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                            <p><span style="color: #17449e;">Although pulmonary medicine only began to evolve as a medical specialty in the 1950s, William Welch and William Osler founded the &#8216;parent&#8217; organization of the American Thoracic Society</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 50px ;">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                            <p>One of the first major discoveries relevant to the field of pulmonology was the discovery of pulmonary circulation. Originally, it was thought that blood reaching the right side of the heart passed through small &#8216;pores&#8217; in the septum into the left side to be oxygenated, as theorized by Galen; however, the discovery of pulmonary circulation disproves this theory, which had previously been accepted since the 2nd century. Thirteenth century anatomist and physiologist Ibn Al-Nafis accurately theorized that there was no &#8216;direct&#8217; passage between the two sides.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 50px ;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #17449e ;border-width: 3px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" data-skin="cl-doc-dpment" id="gdlr-core-column-91318">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 15px 0px 15px;padding: 40px 25px 0px 30px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f9ff ;border-width: 1px 1px 1px 1px;border-color: #dbeaff ;border-style: solid ;"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left-title gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 5px;">
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 15px;"><img src="upload/icon-cl-dpment-1.png" alt="" width="35" height="37" title="icon-cl-dpment-1" /></div>
                                                            <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 25px ;">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Find Your Doctor</h3></div>
                                                            <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                                <p>Open visitation with only two visitors in a room at any given time. No one under 12 years of age may visit without permission .</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border" href="#" style="box-shadow: 0px 4px 18px rgba(0, 0, 0,0.07); -moz-box-shadow: 0px 4px 18px rgba(0, 0, 0,0.07); -webkit-box-shadow: 0px 4px 18px rgba(0, 0, 0,0.07); font-size: 12px ;font-weight: 700 ;letter-spacing: 1px ;color: #17449e ;padding: 12px 30px 14px 30px;background: #ffffff ;"><span class="gdlr-core-content" >Learn More</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30" data-skin="cl-doc-dpment" id="gdlr-core-column-86661">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 15px 0px 15px;padding: 40px 25px 0px 30px;">
                                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f9ff ;border-width: 1px 1px 1px 1px;border-color: #dbeaff ;border-style: solid ;"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-left-title gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 5px;">
                                                        <div class="gdlr-core-column-service-content-wrapper">
                                                            <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-right: 15px;"><img src="upload/icon-cl-dpment-2.png" alt="" width="33" height="38" title="icon-cl-dpment-2" /></div>
                                                            <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 25px ;">
                                                                <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 20px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Special Care Unit</h3></div>
                                                            <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                                                <p>Open visitation with only two visitors in a room at any given time. No one under 12 years of age may visit without permission .</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"><a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-left-align gdlr-core-button-no-border" href="#" style="font-size: 12px ;font-weight: 700 ;letter-spacing: 1px ;color: #ffffff ;padding: 12px 30px 14px 30px;background: #17449e ;"><span class="gdlr-core-content" >Learn More</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-27319">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 60px 0px 30px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #17449e ;">Treatment Price List<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first" id="gdlr-core-column-83316">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 30px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-price-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix " style="padding-bottom: 0px ;">
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Heart Cardioversion</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£1700.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Dupuytren's Fasciectomy</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£999.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Hip Resurfacing Surgery</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£14400.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Laparoscopy</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£3900.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Knee Arthroscopy</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£2700.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Local anaesthetic</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£2300.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-price-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Kidney Stone Treatment</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£4700.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Pain management</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£1199.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Prostate Cancer</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£4400.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Radiology</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£2500.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                        <div class="gdlr-core-price-list clearfix" style="margin-bottom: 25px ;">
                                                            <div class="gdlr-core-price-list-title" style="font-size: 16px ;font-weight: 400 ;color: #9c9c9c ;">Removing wisdom teeth</div>
                                                            <div class="gdlr-core-price-list-price" style="font-size: 16px ;font-weight: 700 ;color: #3c3c3c ;">£2400.00</div>
                                                            <div class="gdlr-core-price-list-divider" style="font-size: 16px ;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-92789">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 15px 0px 0px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 55px ;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #17449e ;border-width: 3px;"></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #171717 ;">Make an appointment<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 15px ;">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 19px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                            <p><span style="color: #17449e;">We will send you a confirmation within 24 hours. <strong>Emergency?</strong> Call 1-2554-2356-33</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 50px ;">
                                                        <div class="gdlr-core-text-box-item-content" style="font-size: 15px ;font-weight: 400 ;letter-spacing: 0px ;text-transform: none ;color: #606060 ;">
                                                            <p>Although pulmonary medicine only began to evolve as a medical specialty in the 1950s, William Welch and William Osler founded the &#8216;parent&#8217; organization of the American Thoracic Society, the National Association.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-83100">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 170px 30px 0px;">
                                            <div class="gdlr-core-pbf-background-wrap"></div>
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                                        <div role="form" class="wpcf7" id="wpcf7-f5826-p7238-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                            <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                                                                <div class="gdlr-core-input-wrap gdlr-core-large gdlr-core-full-width gdlr-core-with-column gdlr-core-no-border">
                                                                    <div class="gdlr-core-column-30"><span class="wpcf7-form-control-wrap your-name"><input type="email" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Full Name*" /></span></div>
                                                                    <div class="gdlr-core-column-30"><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone*" /></span></div>
                                                                    <div class="clear"></div>
                                                                    <div class="gdlr-core-column-30"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email*" /></span></div>
                                                                    <div class="gdlr-core-column-30"><span class="wpcf7-form-control-wrap your-department"><select name="your-department" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="Lung Diseases">Lung Diseases</option><option value="Heart Diseases">Heart Diseases</option><option value="Orthopaedic">Orthopaedic</option><option value="General Surgery">General Surgery</option><option value="Pharmacy">Pharmacy</option><option value="Sports Injury">Sports Injury</option><option value="Fever &amp; Flu">Fever &amp; Flu</option><option value="Dental Service">Dental Service</option><option value="Eye Care">Eye Care</option></select></span></div>
                                                                    <div class="clear"></div>
                                                                    <div class="gdlr-core-column-30"><span class="wpcf7-form-control-wrap your-date"><input type="text" name="your-date" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Date" /></span></div>
                                                                    <div class="gdlr-core-column-30"><span class="wpcf7-form-control-wrap your-time"><input type="text" name="your-time" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Time" /></span></div>
                                                                    <div class="clear"></div>
                                                                    <div class="gdlr-core-column-60"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*"></textarea></span></div>
                                                                    <div class="clear"></div>
                                                                    <div class="gdlr-core-column-60 gdlr-core-left-align">
                                                                        <input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit gdlr-core-full" />
                                                                    </div>
                                                                </div>
                                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  mediz-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id="gdlr-core-custom-menu-widget-15" class="widget widget_gdlr-core-custom-menu-widget mediz-widget">
                                        <h3 class="mediz-widget-title">Other Drugs</h3><span class="clear"></span>
                                        <div class="menu-lung-diseases-container">
                                            <ul id="menu-lung-diseases" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list2">
                                                @foreach($drugs as $dd)
                                                    <li class="menu-item mediz-normal-menu"><a href="/know-your-drugs?drug_id={{ $dd->id }}">{{ $dd->name }}</a></li>
                                                @endforeach
                                                {{-- <li class="menu-item mediz-normal-menu"><a href="#">Panadol</a></li>
                                                <li class="menu-item mediz-normal-menu"><a href="#">Loratidine</a></li>
                                                <li class="menu-item mediz-normal-menu"><a href="#">Actifed</a></li>
                                                <li class="menu-item mediz-normal-menu"><a href="#">Chloroquin</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div id="text-7" class="widget widget_text mediz-widget">
                                        <div class="textwidget">
                                            <p><span class="gdlr-core-space-shortcode" style="margin-top: -7px ;"></span>
                                                <div class="gdlr-core-widget-box-shortcode " style="color: #C3DEFF ;padding: 37px 27px 20px 35px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background-image: url(upload/department-bg.jpg) ;border: 0px solid #293b6d ;">
                                                    <h3 class="gdlr-core-widget-box-shortcode-title" style="color: #ffffff ;">Department Address</h3>
                                                    <div class="gdlr-core-widget-box-shortcode-content">
                                                        <p>Box 3233 1810 Kings Way King Street, 5th Avenue, New York</p>
                                                    </div>
                                                </div><span class="gdlr-core-space-shortcode" style="margin-top: 25px ;"></span></p>
                                            <p><i class="icon-phone" style="font-size: 17px ;color: #17449E ;margin-right: 10px ;"></i> <span style="color: #17449e;">+1-2345-3455-33</span> <span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                                <br />
                                                <i class="icon-envelope" style="font-size: 17px ;color: #17449E ;margin-right: 10px ;"></i> <span style="color: #17449e;"><a href="#" class="__cf_email__">test@gmail.com</a></span><span class="gdlr-core-space-shortcode" style="margin-top: 7px ;"></span></p>
                                        </div>
                                    </div> -->
                                    <div id="gdlr-core-opening-hour-widget-2" class="widget widget_gdlr-core-opening-hour-widget mediz-widget">
                                        <h3 class="mediz-widget-title">Stock Availability</h3><span class="clear"></span>
                                        <div class="gdlr-core-opening-hour-widget" style="color: #008000 ;">
                                            @if($drug->in_stock === 'on')
                                            <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><!-- <i class="icon-clock" ></i> -->In Stock</span><span class="gdlr-core-tail">Currently</span></div>
                                            @else
                                            <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head" style="color: #6c757d;"><!-- <i class="icon-clock" ></i> -->Out of Stock</span><span class="gdlr-core-tail">
                                            @endif
                                            <!-- <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock" ></i>Saturday</span><span class="gdlr-core-tail">09:00 - 14:00</span></div> -->
                                            <!-- <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock" ></i>Sunday</span><span class="gdlr-core-tail">Close</span></div> -->
                                        </div>
                                    </div>
                                    <div id="text-8" class="widget widget_text mediz-widget">
                                        <div class="textwidget">
                                            @if($drug->in_stock === 'on')
                                            <p><span class="gdlr-core-space-shortcode" style="margin-top: -15px ;"></span>
                                                 <form id="cart-form" method="post" action="{{ route('add') }}">
                                                    @csrf
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <label style="font-weight: bold; color: black">Quantity:</label>
                                                        <input id="name" type="number" name="qty" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                    </span>
                                                    <input type="hidden" name="price" value="{{ $drug->price }}">
                                                    <input type="hidden" name="drug_img" value="{{ $drug->drug_img }}">
                                                    <input type="hidden" name="name" value="{{ $drug->name }}">
                                                    <input type="hidden" name="drug_id" value="{{ $drug->id }}">
                                                </form><br/>
                                                <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient-v gdlr-core-center-align gdlr-core-button-no-border gdlr-core-button-full-width" href="" id="cart-btn" style="font-size: 14px ;letter-spacing: 0px ;padding: 19px 29px 20px;text-transform: none ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #4D93E9 ;background: linear-gradient(to right, #4D93E9, #4DA4E9);-moz-background: linear-gradient(to right, #4D93E9, #4DA4E9);-o-background: linear-gradient(to right, #4D93E9, #4DA4E9);-webkit-background: linear-gradient(to right, #4D93E9, #4DA4E9);"><i class="gdlr-core-pos-left fa fas fa-cart-plus" style="color: #ffffff ;"  ></i><span class="gdlr-core-content" >Add to Cart</span></a></p> 
                                            @else
                                            <p><span class="gdlr-core-space-shortcode" style="margin-top: -15px ;"></span><a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient-v gdlr-core-center-align gdlr-core-button-no-border gdlr-core-button-full-width" href="#" style="font-size: 14px ;letter-spacing: 0px ;padding: 19px 29px 20px;text-transform: none ;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;background: #4D93E9 ;background: linear-gradient(to right, #4D93E9, #4DA4E9);-moz-background: linear-gradient(to right, #4D93E9, #4DA4E9);-o-background: linear-gradient(to right, #4D93E9, #4DA4E9);-webkit-background: linear-gradient(to right, #4D93E9, #4DA4E9);"><i class="gdlr-core-pos-left fa fas fa-shipping-fast" style="color: #ffffff ;"  ></i><span class="gdlr-core-content" >Make Express Order</span></a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;border-width: 0px 0px 1px 0px;border-color: #dedede ;border-style: solid ;" data-skin="Personnel">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 13px ;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 24px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #17449e ;">Our Doctors<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 50px ;">
                                        <div class="gdlr-core-divider-container" style="max-width: 44px ;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #d8d8d8 ;border-width: 4px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-personnel-item-style-grid-with-background gdlr-core-personnel-style-grid gdlr-core-with-background gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2  gdlr-core-bullet-style-round gdlr-core-color-bullet" data-type="carousel" data-column="3" data-move="1" data-nav="bullet" data-nav-parent="gdlr-core-personnel-item" data-disable-autoslide="1">
                                            <ul class="slides">
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                            <a href="#"><img src="upload/p-1.1-400x400.jpg" width="600" height="600"  alt="" /></a>
                                                            <div class="gdlr-core-hover-opacity"></div>
                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content-wrap ">
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Joshua Clark</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">Anesthesiologist</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                            <a href="#"><img src="upload/p-9-400x400.jpg" width="600" height="600" alt="" /></a>
                                                            <div class="gdlr-core-hover-opacity"></div>
                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content-wrap ">
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Steven Jacob</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">Anesthesiologist</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                            <a href="#"><img src="upload/p-8-400x400.jpg" width="600" height="600" alt="" /></a>
                                                            <div class="gdlr-core-hover-opacity"></div>
                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content-wrap ">
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Emma Bunton</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">Allergist</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                            <a href="#"><img src="upload/p-7-400x400.jpg" width="600" height="600" alt="" /></a>
                                                            <div class="gdlr-core-hover-opacity"></div>
                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content-wrap ">
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Emily Haden</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">Neurosurgeon</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                            <a href="#"><img src="upload/p-6-400x400.jpg" width="600" height="600" alt="" /></a>
                                                            <div class="gdlr-core-hover-opacity"></div>
                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content-wrap ">
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >Thomas Paul</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">Allergist</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="gdlr-core-item-mglr">
                                                    <div class="gdlr-core-personnel-list clearfix gdlr-core-outer-frame-element" style="box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -moz-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); -webkit-box-shadow: 0 0 30px rgba(10, 10, 10,0.09); border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;">
                                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-hover-element gdlr-core-zoom-on-hover">
                                                            <a href="#"><img src="upload/p-5-400x400.jpg" width="600" height="600" alt="" /></a>
                                                            <div class="gdlr-core-hover-opacity"></div>
                                                        </div>
                                                        <div class="gdlr-core-personnel-list-content-wrap ">
                                                            <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" >David James</a></h3>
                                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 15px ;font-weight: 400 ;font-style: normal ;letter-spacing: 0px ;">Anesthesiologist</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
@endsection