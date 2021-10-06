<template>
             <section class="design-page-sec cmn-gap2">
        <div class="container">
            <div class="order-tab">
                <ul>
                    <li :class="{'active':menu.global_items.designYourBadge }">
                        <a>
                            <span>1</span>
                            <span>DESIGN YOUR BADGE</span>
                        </a>
                    </li>

                    <li :class="{'active':menu.global_items.addNames }">
                        <a>
                            <span>2</span>
                            <span>ADD NAMES</span>
                        </a>
                    </li>

                    <li :class="{'active':menu.global_items.completeOrder }">
                        <a>
                            <span>3</span>
                            <span>COMPLETE ORDER</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div v-show="menu.global_items.designYourBadge">
            <div class="row design-page-row">
                <div class="col-lg-7 design-page-left">
                    <div class="design-tab">
                        <ul>
                            <li class="cursor-pointer" :class="[menu.sizeShape  ? 'active' : 'visited']" @click="selectDesignbar('sizeShape')">
                                <a>
                                    <span><img src="welcome_assets/images/design-list01.svg" alt=""></span>
                                    <span>Size/Shape</span>
                                </a>
                            </li>

                            <li class="cursor-pointer"  :class="[menu.background  ? 'active' : 'visited']" @click="selectDesignbar('background')">
                                <a>
                                    <span><img src="welcome_assets/images/design-list02.svg" alt=""></span>
                                    <span>Background</span>
                                </a></li>

                            <li class="cursor-pointer" :class="[menu.border  ? 'active' : 'visited']" @click="selectDesignbar('border')">
                                <a>
                                    <span><img src="welcome_assets/images/design-list03.svg" alt=""></span>
                                    <span>Border</span>
                                </a></li>

                            <li class="cursor-pointer" :class="[menu.fastener  ? 'active' : 'visited']" @click="selectDesignbar('fastener')">
                                <a>
                                    <span><img src="welcome_assets/images/design-list04.svg" alt=""></span>
                                    <span>Fastener</span>
                                </a></li>

                            <li class="cursor-pointer" :class="[menu.dome  ? 'active' : 'visited']" @click="selectDesignbar('dome')">
                                <a>
                                    <span><img src="welcome_assets/images/design-list05.svg" alt=""></span>
                                    <span>Dome</span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="design_tool_custom" ref="printcontent">
                        <div class="your-text">
                        <div class="design-area" v-bind:class="getShapeClass" :style="{backgroundColor : colors.hex}">
                        <img :src="backgroundImage" class="h-100 w-100" v-if="backgroundImage">
                        <drr
                        :x="clipartDesign.x"
                        :y="clipartDesign.y"
                        :w="clipartDesign.weight"
                        :h="clipartDesign.height"
                        :angle="clipartDesign.angle"
                        :selected="clipartDesign.selected"
                        :aspectRatio="true"
                        @select="selectItemClipart(index)"
                        :innerBox="innerBox"
                        :outerBox="outerBox"
                        v-for="(clipartDesign,index) in clipartDesigns" :key="index"
                        >  
                        <img :src="clipartDesign.img" style="width: 100%; height: 100%" />
                        </drr>
                        <drr
                        :x="logoDesign.x"
                        :y="logoDesign.y"
                        :w="logoDesign.weight"
                        :h="logoDesign.height"
                        :angle="logoDesign.angle"
                        :selected="logoDesign.selected"
                        :aspectRatio="true"
                        @select="selectItemLogo(index)"
                        :innerBox="innerBox"
                        :outerBox="outerBox"
                        v-for="(logoDesign,index) in logoDesigns" :key="index"
                        >  
                        <img :src="logoDesign.img" style="width: 100%; height: 100%" />
                        </drr>
                        <drr
                        :x="textDesign.x"
                        :y="textDesign.y"
                        :w="textDesign.weight"
                        :h="textDesign.height"
                        :angle="textDesign.angle"
                        :selected="textDesign.selected"
                        :aspectRatio="true"
                        @resize = "resize"
                        @select="selectItem(index)"
                        v-for="(textDesign,index) in textDesigns" :key="index"
                        >
                                <div style="width: 100%; height: 100%" v-bind:class="getCustomDesignClass(index)" :style="{color: textDesign.fontColor, fontSize: textDesign.fontSize*11+ 'px'}">{{textDesign.text}}</div>
                        </drr>
                            <!-- <textarea placeholder="Your Text"></textarea>
                            <a href="#url"><img src="welcome_assets/images/close.svg" alt=""></a> -->
                        </div>
                        
                        </div>

                        <span class="right" v-if="shapeDefaultClass == 'rectangle1-3'">1’’</span>
                        <span class="right" v-if="shapeDefaultClass =='rectangle1-5-3' ">1.5’’</span>
                        <span class="right" v-if="shapeDefaultClass == 'oval1-3'">1.5’’</span>
                        <span class="right" v-if="shapeDefaultClass == 'rectangle12-3'">2’’</span> 
                        <span class="bottom">3’’</span>
                    </div>

                    <div class="text-content">
                        <p>
                            <span>White</span> boxes around logos will not be printed on colored backgrounds.
                            You can click <span>Add Text</span> up to (4) times for multiple lines of text.
                        </p>

                        <ul>
                            <li><a class="cmn-btn cursor-pointer" @click="printThis">Finished Designing</a></li>
                            <li>
                                <h3>Price: <span>{{getPrice}} each</span></h3>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="col-lg-5 design-page-right">
                    <div class="add-list">
                        <ul>
                            <li><a href="#url" @click="addText">+ Add Text</a></li>
                            <li><a href="#url" @click="selectImage">+ Add Logo</a></li>
                             <input
                                    ref="fileInput"
                                    type="file"
                                    @input="pickFile" style="display: none;">
                            <li><a href="#url" @click="$modal.show('clipart-modal')">+ Add Clipart</a></li>
                        </ul>
                    </div>

                    <div class="size-sec" v-if="menu.sizeShape">
                        <h5>SELECT A SIZE / SHAPE</h5>
                        <ul>
                            <li>
                                <div class="form_input_radio">
                                    <label>
                                        <input type="radio" value="rectangle1-3" v-model="shapeDefaultClass">
                                        <span> 1’’x3’’ Rectangle</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form_input_radio">
                                    <label>
                                        <input type="radio" value="rectangle1-5-3" v-model="shapeDefaultClass">
                                        <span>1.5’’x3’’ Rectangle</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form_input_radio">
                                    <label>
                                        <input type="radio" value="oval1-3" v-model="shapeDefaultClass">
                                        <span>1.5’x3’ Oval</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="form_input_radio">
                                    <label>
                                        <input type="radio" value="rectangle12-3" v-model="shapeDefaultClass">
                                        <span>2’’x3’’ Rectangle</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="size-sec" v-if="menu.textOptions">
                                    <h5>TEXT OPTIONS</h5>
                                    <div class="">
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Your Text</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" v-model="getYourText" id="inputPassword" placeholder="Your Text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Font</label>
                                            <div class="col-sm-9">
                                                    <select class="form-control" v-model="textDesigns[selectedTextBoxIndex].font" >
                                                   <option value="fnt2" id="fnt2" >Arial</option>
                                                    <option value="fnt4" id="fnt4">Century Gothic</option>
                                                    <option value="fnt28" id="fnt28">Century Gothic Bold</option>
                                                    <option value="fnt5" id="fnt5">Comic Sans MS</option>
                                                    <option value="fnt6" id="fnt6">Courier New</option>
                                                    <option value="fnt7" id="fnt7">Georgia</option>
                                                    <option value="fnt8" id="fnt8">Impact</option>
                                                    <option value="fnt9" id="fnt9">Times New Roman</option>
                                                    <option value="fnt10" id="fnt10">Trebuchet MS</option>
                                                    <option value="fnt11" id="fnt11">Verdana</option>
                                                    <option value="fnt12" id="fnt12">Gotham</option>
                                                    <option value="fnt13" id="fnt13">Cormorant Garamond Medium</option>
                                                    <option value="fnt15" id="fnt15">Lobster</option>
                                                    <option value="fnt17" id="fnt17">Old English TextMT</option>
                                                    <option value="fnt22" id="fnt22">MonotypeCorsiva</option>
                                                    <option value="fnt23" id="fnt23">Scriptoria SSK</option>
                                                    <option value="fnt19" id="fnt19">Ardestine</option>
                                                    <option value="fnt20" id="fnt20">Arbonnie</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Font Style</label>
                                            <div class="col-sm-9">
                                            <select id="inputState" class="form-control" v-model="textDesigns[selectedTextBoxIndex].fontStyle">
                                                    <option value="">Regular</option>
                                                    <option value="font-weight-bold">Bold</option>
                                                    <option value="font-italic">Italic</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Font Size</label>
                                            <div class="col-sm-9">
                                                <VueSimpleRangeSlider
                                                style="width: 100%"
                                                :min="1"
                                                :max="10"
                                                v-model="textDesigns[selectedTextBoxIndex].fontSize"
                                                />
                                            <!-- <select id="inputState" class="form-control" v-model="textDesigns[selectedTextBoxIndex].fontSize">
                                                    <option value="font-size20">10</option>
                                                    <option value="font-size35">20</option>
                                                    <option value="font-size50">30</option>
                                            </select> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Color</label>
                                            <div class="col-sm-9 color-row">
                                                <span id="colr" class="colr-000000" style="background: #000000;" :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#000000' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#000000'"></span>
                                                <span class="colr-ffffff" style="background: #ffffff;border-color: #ccc"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#ffffff' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#ffffff'"></span>
                                                <span class="colr-ff0000" style="background: #ff0000;"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#ff0000' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#ff0000'"></span>
                                                <span class="colr-0000ff" style="background: #0000FF;"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#0000FF' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#0000FF'"></span>
                                                <span class="colr-008000" style="background: #008000"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#008000' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#008000'"></span>
                                                <span class="colr-ffa500" style="background: #FFA500"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#FFA500' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#FFA500'"></span>
                                                <span class="colr-ff921d" style="background: #ff921d"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#ff921d' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#ff921d'"></span>
                                                <span class="colr-2ee6b4" style="background: #2ee6b4"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#2ee6b4' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#2ee6b4'"></span>
                                                <span class="colr-547ce1" style="background: #547ce1"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#547ce1' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#547ce1'"></span>
                                                <span class="colr-51a3f0" style="background: #51a3f0"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#51a3f0' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#51a3f0'"></span>
                                                <span class="colr-5a5af5" style="background: #5a5af5"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#5a5af5' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#5a5af5'"></span>
                                                <span class="colr-ff00f0" style="background: #ff00f0"  :class="{active: textDesigns[selectedTextBoxIndex].fontColor == '#ff00f0' }" @click="textDesigns[selectedTextBoxIndex].fontColor = '#ff00f0'"></span>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Color</label>
                                            <div class="col-sm-9">
                                            <select id="inputState" class="form-control" v-model="textDesigns[selectedTextBoxIndex].fontColor">
                                                <option value="">Black</option>
                                                <option value="font-coloRed">Red</option>
                                                <option value="font-colorGreen">Green</option>
                                                <option value="font-colorBlue">Blue</option>
                                            </select>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button class="btn btn-danger" v-if="textDesigns.length>1" @click="deleteText">Delete Text</button>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                     <div class="size-sec" v-if="menu.background">
                                    <div class="">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#MATERIAL" role="tab" aria-controls="home" aria-selected="true">MATERIAL</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#colors" role="tab" aria-controls="profile" aria-selected="false">COLORS</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#custom" role="tab" aria-controls="contact" aria-selected="false">CUSTOM</a>
                                            </li> 
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active ul-custom-height" id="MATERIAL" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="matirial-list">
                                        <ul>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label @click="backgroundImage= '/background/Material/White-Plastic/1.png'; selectTypeForPrice('white_plastic_rectangle')" class="custom_height_60">
                                                        <input type="radio" checked name="name">
                                                        <span><img src="/background/Material/White-Plastic/1-thumb.png" alt="" class="border"></span>
                                                    </label>
                                                    <span>White - Plastic</span>
                                                </div>
                                            </li>

                                            <li v-if="this.shapeDefaultClass!='oval1-3' ">
                                                <div class="form_input_radio">
                                                    <label @click="backgroundImage= '/background/Material/Gold-Plastic/7.png'; selectTypeForPrice('gold_silver_plastic_rectangle')" class="custom_height_60">
                                                        <input type="radio" value="true" name="name" v-model="selectionForPrice.gold_silver_plastic_rectangle">
                                                        <span><img src="/background/Material/Gold-Plastic/7-thumb.png" alt=""></span>
                                                    </label>
                                                    <span>Gold - Plastic</span>
                                                </div>
                                            </li>
                                            <li v-if="this.shapeDefaultClass!='oval1-3' ">
                                                <div class="form_input_radio">
                                                    <label @click="backgroundImage= '/background/Material/Silver-Plastic/8.png';  selectTypeForPrice('gold_silver_plastic_rectangle')" class="custom_height_60">
                                                        <input type="radio" name="name">
                                                        <span><img src="/background/Material/Silver-Plastic/8-thumb.png" alt=""></span>
                                                    </label>
                                                    <span>Silver - Plastic</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form_input_radio">
                                                    <label @click="backgroundImage= '/background/Material/Gold-Metallic/5.png'; selectTypeForPrice('metallic_plastic_rectangle') " class="custom_height_60">
                                                        <input type="radio" name="name">
                                                        <span><img src="/background/Material/Gold-Metallic/5-thumb.png" alt=""></span>
                                                    </label>
                                                    <span>Gold Metallic</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form_input_radio">
                                                    <label @click="backgroundImage= '/background/Material/Silver-Metallic/6.png'; selectTypeForPrice('metallic_plastic_rectangle')" class="custom_height_60">
                                                        <input type="radio"  name="name">
                                                        <span><img src="/background/Material/Silver-Metallic/6-thumb.png" alt=""></span>
                                                    </label>
                                                    <span>Silver Metallic</span>
                                                </div>
                                            </li>

                                            <!-- <li>
                                                <div class="form_input_radio">
                                                    <label @click="backgroundImage= 'background/Material/Wood-Grain/11.png'" class="custom_height_60">
                                                        <input type="radio" name="name">
                                                        <span><img src="/background/Material/Wood-Grain/11-thumb.png" alt=""></span>
                                                    </label>
                                                    <span>Wood Grain</span>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                                <!-- <div class="row">
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/White-Plastic/1.png'"><img class="border" src="/background/Material/White-Plastic/1-thumb.png">White - Plastic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer" v-if="this.shapeDefaultClass!='oval1-3' "><span  @click="backgroundImage= '/background/Material/Gold-Plastic/7.png'"><img class="border" src="/background/Material/Gold-Plastic/7-thumb.png">Gold - Plastic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer" v-if="this.shapeDefaultClass!='oval1-3' "><span  @click="backgroundImage= '/background/Material/Silver-Plastic/8.png'"><img class="border" src="/background/Material/Silver-Plastic/8-thumb.png">Silver - Plastic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/Gold-Metallic/5.png'"><img class="border" src="/background/Material/Gold-Metallic/5-thumb.png">Gold Metallic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/Silver-Metallic/6.png'"><img class="border" src="/background/Material/Silver-Metallic/6-thumb.png">Silver Metallic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/Wood-Grain/11.png'"><img  class="border" src="/background/Material/Wood-Grain/11-thumb.png">Wood Grain</span></div>
                                                </div> -->
                                            </div>
                                            <div class="tab-pane fade" id="colors" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row" style="margin-right: 13px;">
                                                <photoshop-picker v-model="colors" class="color-picker-custom mt-2" @input="colorChanged" />
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom" role="tabpanel" aria-labelledby="profile-tab">
                                                <!-- <div class="row custom-background-img"> -->
                                                     <div class="matirial-list">
                                                     <ul>
                                            <li v-for="i in 37" :key="i">
                                                <div class="form_input_radio">
                                                    <label class="custom_height_60" @click="backgroundImage= '/background/Custom/' + i + '/' + i + '.png'">
                                                        <input type="radio" name="name">
                                                        <span><img :src="'/background/Custom/' + i + '/thumb.png'"  alt="" style="height:60px; width:100px;"></span>
                                                    </label>
                                                </div>
                                            </li>
                                                     </ul>
                                                     <!-- </div> -->
                                                    <!-- <div class="col-md-4 cursor-pointer pt-4" v-for="i in 37" :key="i"><img style="height:60px; width:100px;" class="border" :src="'/background/Custom/' + i + '/thumb.png'" @click="backgroundImage= '/background/Custom/' + i + '/' + i + '.png'"></div> -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                            </div>
                                    </div>
                    </div>
                     <div class="size-sec" v-if="menu.border">
                        <div class="border-option">
                           <a href="#uel">
                            Border Option
                           </a>
                        </div>
                        <div class="matirial-list">
                            <ul>
                                <li>
                                    <div class="form_input_radio">
                                        <label @click="borderDefaultClass = 'gold-border'" >
                                            <input type="radio" name="name">
                                            <span><img src="welcome_assets/images/border01.png" alt="" ></span>
                                        </label>
                                        <span>Gold Border</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="form_input_radio">
                                        <label @click="borderDefaultClass = 'silver-border'">
                                            <input type="radio" name="name">
                                            <span><img src="welcome_assets/images/border02.png" alt=""></span>
                                        </label>
                                        <span>Silver Border</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form_input_radio">
                                        <label @click="borderDefaultClass = 'black-border'">
                                            <input type="radio" name="name">
                                            <span><img src="welcome_assets/images/border03.png" alt=""></span>
                                        </label>
                                        <span>Black Border</span>
                                    </div>
                                </li>
                                <!-- <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="welcome_assets/images/border04.png" alt=""></span>
                                        </label>
                                        <span>Rose Border</span>
                                    </div>
                                </li> -->

                                <li>
                                    <div class="form_input_radio">
                                        <label @click="borderDefaultClass = 'no-border'">
                                            <input type="radio" checked name="name">
                                            <span><img src="welcome_assets/images/border05.png" alt=""></span>
                                        </label>
                                        <span>No Border</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="size-sec" v-if="menu.fastener">
                        <div class="border-option">
                           <a href="#uel">
                            FASTENER OPTIONS
                           </a>
                        </div>
                        <div class="matirial-list fastener-list">
                            <ul>
                                <!-- <li>
                                    <div class="form_input_radio">
                                        <label @click="selected_fastener = 'Jewelers'">
                                            <input type="radio" name="name">
                                            <span><img src="/fasteners/Jeweler_s Pin.png" style="height:60px; width:100px;" alt=""></span>
                                        </label>
                                        <span>Jewelers Pin</span>
                                    </div>
                                </li> -->

                                <li>
                                    <div class="form_input_radio">
                                        <label @click="selected_fastener = 'Magnet'">
                                            <input type="radio" name="name">
                                            <span><img src="/fasteners/Magnet.jpg" style="height:60px; width:100px;" alt=""></span>
                                        </label>
                                        <span>Magnet</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form_input_radio">
                                        <label @click="selected_fastener = 'Pin'">
                                            <input type="radio" name="name">
                                            <span><img src="/fasteners/Pin.jpg" style="height:60px; width:100px;" alt=""></span>
                                        </label>
                                        <span>Pin</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form_input_radio">
                                        <label @click="selected_fastener = 'Swivel'">
                                            <input type="radio" name="name">
                                            <span><img src="/fasteners/Swivel Bulldog.png" style="height:60px; width:100px;" alt=""></span>
                                        </label>
                                        <span>Swivel Clip</span>
                                    </div>
                                </li>

                                <!-- <li>
                                    <div class="form_input_radio">
                                        <label>
                                            <input type="radio" name="name">
                                            <span><img src="welcome_assets/images/f-image05.png" alt=""></span>
                                        </label>
                                        <span>Pocket clip</span>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="size-sec" v-if="menu.dome">
                        <div class="border-option">
                           <a href="#uel">
                            NAME BADGE DOME
                           </a>
                        </div>
                        <div class="matirial-list demo-list">
                            <ul>
                                <li>
                                    <div class="form_input_radio">
                                        <label @click="selected_fastener = 'doming'">
                                            <input type="radio" name="name">
                                            <span><img src="welcome_assets/images/demo01.png" alt=""></span>
                                        </label>
                                        <span>Add Doming</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="form_input_radio">
                                        <label @click="selected_fastener = 'no doming'">
                                            <input type="radio" checked name="name">
                                            <span><img src="welcome_assets/images/demo02.png" alt=""></span>
                                        </label>
                                        <span>No Doming</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="Product-sec">
                <div class="table-sec" :class="{'price_yable-custom-margin' : shapeDefaultClass == 'rectangle12-3'}">
                    <table>
                        <tr>
                            <th colspan="2">Quantity Price</th>
                            <th colspan="7">*These prices will update automatically based on the design you choose above!</th>
                        </tr>
                        <tr>
                            <td>QTY:</td>
                            <td>1-10</td>
                            <td>11-20</td>
                            <td>21-30</td>
                            <td>31-50</td>
                            <td>51-100</td>
                            <td>101-199</td>
                            <td>200-499</td>
                            <td>500+</td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>{{getPriceTable["1-5"]}}</td>
                            <td>{{getPriceTable["6-15"]}}</td>
                            <td>{{getPriceTable["16-25"]}}</td>
                            <td>{{getPriceTable["26-50"]}}</td>
                            <td>{{getPriceTable["51-100"]}}</td>
                            <td>{{getPriceTable["101-199"]}}</td>
                            <td>{{getPriceTable["200-499"]}}</td>
                            <td>{{getPriceTable["500+"]}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
            <div v-show="menu.global_items.addNames">
                <div v-show="menu.global_items.addOrEditNames">
                    <div class="demo-cont demo-cont-2">
                <p>
                    Please add all the names and quantities you want for your name badges. (All name badges will keep the same design formatting) <br>
                    **You will not see a proof of all the individual name badges. <br>
                    ***We will match all the additional names to your first design and make sure all the text fits properly.
                </p>
            </div>

            <div class="demo-table">
                <form>
                    <table>
                        <tr>
                            <th>No</th>
                            <th v-for="(textDesign, index) in textDesigns" :key="index">Field {{index+1}}</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td v-for="(textDesign, index) in textDesigns" :key="index" :width="calculateTDWidthOfEditNames">
                                <div class="form-input" v-if="textDesigns[0].is_edit">
                                    <input type="text" placeholder="Lorem Ipsum" v-model="textDesigns[index].text">
                                </div>
                                <span v-else>{{textDesigns[index].text}}</span>
                            </td>
                            <td>
                                <div class="quantity">
                                    <div class="quantity-wrap">
                                        <button type="button" @click="textDesigns[0].quantity>1 && textDesigns[0].quantity--">-</button>
                                        <input type="text"  v-model="textDesigns[0].quantity" >
                                        <button type="button" @click="textDesigns[0].quantity++">+</button>
                                    </div>
                                  <div class="delete-edit" v-if="!textDesigns[0].is_edit">
                                    <a class="cmn-btn"  href="#url" @click="textDesigns[0].is_edit=true"><img src="welcome_assets/images/edit-icon.svg" alt=""></a>
                                    <!-- <a class="cmn-btn" href="#url"><img src="welcome_assets/images/delete-icon.svg" alt=""></a> -->
                                    </div>
                                <a class="cmn-btn" href="#url" v-if="textDesigns[0].is_edit"   @click="textDesigns[0].is_edit=false">DONE</a>
                                </div>
                            </td>
                        </tr>
                        <tr v-for="(addNameArr, index) in addNames" :key="index">
                            <td>{{index+2}}</td>
                            <td v-for="(addName,index_2nd) in addNameArr" :key="index_2nd" :width="calculateTDWidthOfEditNames"> 
                                <div class="form-input" v-if="addNames[index][0].is_edit">
                                     <input type="text"  v-model="addNameArr[index_2nd].text">
                                </div>
                                <span v-else>{{addNameArr[index_2nd].text}}</span>
                            </td>
                            <td>
                                <div class="quantity">
                                    <div class="quantity-wrap" v-if="index< addNames.length-1">
                                        <button type="button" @click="addNames[index][0].quantity>1 && addNames[index][0].quantity--">-</button>
                                        <input type="text"  v-model="addNames[index][0].quantity">
                                        <button type="button" @click="addNames[index][0].quantity++">+</button>
                                    </div>
                                  <a class="cmn-btn" href="#url" v-if="addNames[index][0].is_edit && (index!=addNames.length-1)" @click="addNames[index][0].is_edit=false">DONE</a>
                                  <div class="delete-edit" v-if="!addNames[index][0].is_edit">
                                    <a class="cmn-btn" href="#url" @click="addNames[index][0].is_edit=true"><img src="welcome_assets/images/edit-icon.svg" alt=""></a>
                                    <a class="cmn-btn" href="#url" @click="nameDeleteConfirm(index)"><img src="welcome_assets/images/delete-icon.svg" alt=""></a>
                                </div>
                                </div>
                                <div class="total" v-if="addNames[index][0].is_edit && (index==addNames.length-1)">
                                    <input type="text" placeholder="1" v-model="addNames[index][0].quantity">
                                    <a class="cmn-btn" href="#url" @click="setDataToNamesArray(true,index)" >+ Add Name</a>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- <tr>
                            <td></td>
                            <td>
                                <div class="form-input">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                            </td>
                            <td>
                                <div class="total">
                                    <input type="text" placeholder="1">
                                    <a class="cmn-btn" href="#url">+ Add Name</a>
                                </div>
                            </td>
                        </tr> -->
                        <tr>
                            <td :colspan="calculateColspanOfEditNamesActionMenu">
                                <div class="complete-btn">
                                    <a class="cmn-btn cursor-pointer" @click="menu.global_items.addOrEditNames= false; printThis">GO BACK</a>
                                    <a class="cmn-btn cursor-pointer" @click="menu.global_items.addOrEditNames= false; printThis">finished</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
                </div>
                <div v-show="!menu.global_items.addOrEditNames">
                    <div class="demo-cont">
                <p>
                    If you require additional badges with different names, click the "Add or edit names"
                    button.If you do not need badges with different names, click "I am finished adding 
                    names" to continue your order.
                </p>
            </div>

            <div class="your-text-box">
                <h3>
                    <img :src="output" class="w-100 shadow" style="border-radius: 30px;">
                </h3>
            </div>

            <div class="button-section">
                <ul>
                    <li><a class="cmn-btn cursor-pointer" @click="gobackAndEdit">Go back and edit badge</a></li>
                    <li><a class="cmn-btn cursor-pointer" @click="menu.global_items.addOrEditNames= true;" >Add or edit names</a></li>
                    <li><a class="cmn-btn cursor-pointer" href="#url" @click="finishedAddingNames">I am finished adding names</a></li>
                </ul>
            </div>
                </div>
                  
            </div>
        </div>
         <modal name="clipart-modal" :adaptive="true" :draggable="true">
                        <div class="row p-4 clipart-custom">
                                <div class="col-md-3 cursor-pointer pt-4" v-for="i in 36" :key="i"><img style="height:60px; width:100px;" :src="'/clipart/' + i + '/thumb.png'" @click="addClipart(i)"></div>
                        </div>
         </modal>
    </section>

</template>

<script>
//https://vuejsfeed.com/blog/drag-and-resize-elements-with-vuedraggableresizable

import drr from '@minogin/vue-drag-resize-rotate'
import { Photoshop } from 'vue-color'
import VueSimpleRangeSlider from 'vue-simple-range-slider';
import 'vue-simple-range-slider/dist/vueSimpleRangeSlider.css'
export default {
//   name: 'about-us',
    components: {
    drr,
    'photoshop-picker': Photoshop,
    VueSimpleRangeSlider 
  },
  mounted() {
    // console.log("This is about component");
  },
  data(){
      return {
          previewImage: null,
          addTextIndex:0,
          addClipartIndex:0,
          addLogoIndex:0,
          selectedTextBoxIndex:0,
          selectedClipartIndex:0,
          selectedLogoIndex:0,
          selectionForPrice:{
            white_plastic_rectangle:true,
            gold_silver_plastic_rectangle:false,
            metallic_plastic_rectangle:false,
            framed_white_badges:false,
            framed_gold_or_silver_badges:false,
            framed_metallic_badges:false,
            oval_white_badges:false,
            framed_oval_white_badges:false,
            framed_metallic_oval_badges:false,
            fasteners:false
          },
          addNames:[],
            textDesigns:[
                {
                    x:390,
                    y:85,
                    weight:160,
                    height:55,
                    angle: 0,
                    text: "Your text",
                    font:"fnt2",
                    fontStyle: "",
                    fontSize: 3,
                    fontColor: "#000000",
                    selected:false,
                    quantity : 1,
                    is_edit: false
                }
            ],
            priceStructures:{
               white_plastic_rectangle: [
                    {
                    name: "White Plastic Rectangle",
                    slug: "white_plastic_rectangle",
                    "1-5": "15.37",
                    "6-15": "13.88",
                    "16-25": "12.44",
                    "26-50": "11.09",
                    "51-100": "9.23",
                    "101-199": "8.14",
                    "200-499": "7.75",
                    "500+": "7.07",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                gold_silver_plastic_rectangle: [
                    {
                    name: "Gold & Silver Plastic Rectangle",
                    slug: "gold_silver_plastic_rectangle",
                    "1-5": "16.42",
                    "6-15": "14.93",
                    "16-25": "13.49",
                    "26-50": "12.14",
                    "51-100" : "10.28",
                    "101-199": "9.19",
                    "200-499": "8.80",
                    "500+": "8.12",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                metallic_plastic_rectangle: [
                    {
                    name: "Metallic Plastic Rectangle",
                    slug: "metallic_plastic_rectangle",
                    "1-5": "16.95",
                    "6-15": "15.46",
                    "16-25": "14.02",
                    "26-50": "12.66",
                    "51-100": "10.80",
                    "101-199": "9.71",
                    "200-499": "9.32",
                    "500+": "8.64",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                framed_white_badges: [
                    {
                    name: "Framed White Badges",
                    slug: "framed_white_badges",
                    "1-5": "21.39",
                    "6-15": "21.39",
                    "16-25": "21.39",
                    "26-50": "21.39",
                    "51-100": "21.39",
                    "101-199": "21.39",
                    "200-499": "21.39",
                    "500+": "21.39",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                framed_gold_or_silver_badges: [
                    {
                    name: "Framed Gold or Silver Badges",
                    slug: "framed_gold_or_silver_badges",
                    "1-5": "22.49",
                    "6-15": "20.93",
                    "16-25": "19.42",
                    "26-50": "17.99",
                    "51-100": "16.04",
                    "101-199": "14.90",
                    "200-499": "14.49",
                    "500+": "13.77",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                framed_metallic_badges: [
                    {
                    name: "Framed metallic Badges",
                    slug: "framed_metallic_badges",
                    "1-5": "23.04",
                    "6-15": "21.48",
                    "16-25": "19.97",
                    "26-50": "18.55",
                    "51-100": "16.59",
                    "101-199": "15.45",
                    "200-499": "15.04",
                    "500+": "14.32",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                oval_white_badges: [
                    {
                    name: "Oval White Badges",
                    slug: "oval_white_badges",
                    "1-5": "19.37",
                    "6-15": "17.88",
                    "16-25": "16.44",
                    "26-50": "15.09",
                    "51-100": "13.23",
                    "101-199": "12.14",
                    "200-499": "11.75",
                    "500+": "11.07",
                    magnet: null,
                    pin: null,
                    swivel_clip: null
                    }
                ],
                framed_oval_white_badges: [
                {
                name: "Framed Oval White Badges",
                slug: "framed_oval_white_badges",
                "1-5": "25.37",
                "6-15": "23.88",
                "16-25": "22.44",
                "26-50": "21.09",
                "51-100": "19.23",
                "101-199": "18.14",
                "200-499": "17.75",
                "500+": "17.07",
                magnet: null,
                pin: null,
                swivel_clip: null
                }
                ],
                framed_metallic_oval_badges: [
                {
                name: "Framed Metallic Oval Badges",
                slug: "framed_metallic_oval_badges",
                "1-5": "26.37",
                "6-15": "24.88",
                "16-25": "23.44",
                "26-50": "22.09",
                "51-100": "20.23",
                "101-199": "19.14",
                "200-499": "18.75",
                "500+": "18.07",
                magnet: null,
                pin: null,
                swivel_clip: null
                }
                ],
                fasteners: [
                {
                name: "Fasteners",
                slug: "fasteners",
                "1-5": null,
                "6-15": null,
                "16-25": null,
                "26-50": null,
                "51-100": null,
                "101-199": null,
                "200-499": null,
                "500+": null,
                magnet: "2.00",
                pin: "0.00",
                swivel_clip: "0.00"
                }
                ]
                },
        colors:{
            hex: '#FFFFFF',
            hex8: '#194D33A8',
            hsl: { h: 150, s: 0.5, l: 0.2, a: 1 },
            hsv: { h: 150, s: 0.66, v: 0.30, a: 1 },
            rgba: { r: 25, g: 77, b: 51, a: 1 },
            a: 1
        },
        clipartDesigns:[
                // {
                //     x:100,
                //     y:60,
                //     weight:100,
                //     height:60,
                //     angle: 0,
                //     img: "/clipart/1/1.png",
                //     font:"font-fnt2",
                //     fontStyle: "",
                //     fontSize: "font-size35",
                //     fontColor: "",
                //     selected:false
                // }
        ],
            logoDesigns:[],
            menu:{
                sizeShape:true,
                background:false,
                border:false,
                textOptions:false,
                fastener:false,
                logoClip:false,
                dome:false,
                global_items:{ 
                    designYourBadge:true,
                    addNames:false,
                    completeOrder:false,
                    addOrEditNames:false
                }
            },
            output: null,
            shapeDefaultClass: 'rectangle1-3',
            borderDefaultClass: 'no-border',
            backgroundImage: "",
            selected_fastener: "",
            selected_dome: "",
            price:[
                {quantity: 1-5, price:40 },
                {quantity: 12, price:40 },
                {quantity: 12, price:40 },
                {quantity: 12, price:40 },
                {quantity: 12, price:40 },
                {quantity: 12, price:40 },
                {quantity: 12, price:40 },
                {quantity: 12, price:40 }
            ]
      }
  },
  computed:{
      calculateTDWidthOfEditNames(){
          return `${65/this.textDesigns.length}%`;
      },
      calculateColspanOfEditNamesActionMenu(){
          return 2 + this.textDesigns.length;
      },
      getShapeClass(){
        //   console.info('textDesigns[selectedTextBoxIndex].fontSize',this.textDesigns[this.selectedTextBoxIndex].fontSize);
        if(this.textDesigns.length>0){
            if(this.textDesigns[this.selectedTextBoxIndex].fontSize==1){
                this.textDesigns[this.selectedTextBoxIndex].weight=70;
                this.textDesigns[this.selectedTextBoxIndex].height=28;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==2){
                this.textDesigns[this.selectedTextBoxIndex].weight=125;
                this.textDesigns[this.selectedTextBoxIndex].height=37;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==3){
                this.textDesigns[this.selectedTextBoxIndex].weight=170;
                this.textDesigns[this.selectedTextBoxIndex].height=50;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==4){
                this.textDesigns[this.selectedTextBoxIndex].weight=200;
                this.textDesigns[this.selectedTextBoxIndex].height=61;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==5){
            this.textDesigns[this.selectedTextBoxIndex].weight=250;
            this.textDesigns[this.selectedTextBoxIndex].height=68;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==6){
            this.textDesigns[this.selectedTextBoxIndex].weight=300;
            this.textDesigns[this.selectedTextBoxIndex].height=82;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==7){
            this.textDesigns[this.selectedTextBoxIndex].weight=350;
            this.textDesigns[this.selectedTextBoxIndex].height=110;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==8){
            this.textDesigns[this.selectedTextBoxIndex].weight=380;
            this.textDesigns[this.selectedTextBoxIndex].height=116;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==9){
            this.textDesigns[this.selectedTextBoxIndex].weight=430;
            this.textDesigns[this.selectedTextBoxIndex].height=125;
            }
            else if(this.textDesigns[this.selectedTextBoxIndex].fontSize==10){
            this.textDesigns[this.selectedTextBoxIndex].weight=450;
            this.textDesigns[this.selectedTextBoxIndex].height=135;
            }
        }
            this.selectTypeForPrice('white_plastic_rectangle');
            
      if(this.addNames.length==0)
          this.setDataToNamesArray();

          return {
            'rectangle1-3': 'rectangle1-3' == this.shapeDefaultClass,
            'rectangle1-5-3': 'rectangle1-5-3'==this.shapeDefaultClass,
            'oval1-3': 'oval1-3'==this.shapeDefaultClass,
            'rectangle12-3': 'rectangle12-3'==this.shapeDefaultClass,
            'gold-border' : 'gold-border' == this.borderDefaultClass,
            'silver-border' : 'silver-border' == this.borderDefaultClass,
            'black-border' : 'black-border' == this.borderDefaultClass,
            'rose-border' : 'rose-border' == this.borderDefaultClass,
            'no-border' : 'no-border' == this.borderDefaultClass
         }
      },
      getYourText:{
          get() {
                return this.textDesigns[this.selectedTextBoxIndex].text;
             },
        set(value) {
            this.textDesigns[this.selectedTextBoxIndex].text = value;
        }
      },
      getPrice(){
                return this.getPriceTable["1-5"];
      },
      getPriceTable(){
        //   if(this.selectionForPrice.white_plastic_rectangle)
        //   return this.calculatePrice('white_plastic_rectangle');
        if(this.selectionForPrice.white_plastic_rectangle)
            return  this.calculatePrice('white_plastic_rectangle');
        else if(this.selectionForPrice.gold_silver_plastic_rectangle) 
            return  this.calculatePrice('gold_silver_plastic_rectangle');
        else if(this.selectionForPrice.metallic_plastic_rectangle) 
            return  this.calculatePrice('metallic_plastic_rectangle');
        else if(this.selectionForPrice.framed_white_badges)
            return  this.calculatePrice('framed_white_badges');
        else if(this.selectionForPrice.framed_gold_or_silver_badges)
            return  this.calculatePrice('framed_gold_or_silver_badges');
        else if(this.selectionForPrice.framed_metallic_badges)
            return  this.calculatePrice('framed_metallic_badges');
        else if(this.selectionForPrice.oval_white_badges)
            return  this.calculatePrice('oval_white_badges');
        else if(this.selectionForPrice.framed_oval_white_badges)
            return  this.calculatePrice('framed_oval_white_badges');
        else if(this.selectionForPrice.framed_metallic_oval_badges)
            return  this.calculatePrice('framed_metallic_oval_badges');
      }
  },
  methods: {
    //   itemChange(event){
    //       console.info('event',event);
    //   },
    nameDeleteConfirm(index){
        if(confirm('Are you sure you want to delete?'))
        this.addNames.splice(index, 1);
    },
    selectTypeForPrice(type){
        // console.info('type',this.selectionForPrice[type]);
        if(this.shapeDefaultClass == 'oval1-3'){
             switch (type) {
                 case 'white_plastic_rectangle':
                     type= 'oval_white_badges';
                     break;
                 case 'metallic_plastic_rectangle':
                     type= 'framed_metallic_oval_badges';
                     break;
                 default:
                     break;
             }
        }
        this.selectionForPrice['white_plastic_rectangle']= ('white_plastic_rectangle'==type);
        this.selectionForPrice['gold_silver_plastic_rectangle']= ('gold_silver_plastic_rectangle'==type);
        this.selectionForPrice['metallic_plastic_rectangle']= ('metallic_plastic_rectangle'==type);
        this.selectionForPrice['framed_white_badges']= ('framed_white_badges'==type);
        this.selectionForPrice['framed_gold_or_silver_badges']= ('framed_gold_or_silver_badges'==type);
        this.selectionForPrice['framed_metallic_badges']= ('framed_metallic_badges'==type);
        this.selectionForPrice['oval_white_badges']= ('oval_white_badges'==type);
        this.selectionForPrice['framed_oval_white_badges']= ('framed_oval_white_badges'==type);
        this.selectionForPrice['framed_metallic_oval_badges']= ('framed_metallic_oval_badges'==type);
    },
    resize(newRect) {
    //    console.info('newRect',newRect);
       if(newRect.w>50 && newRect.w<100)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=1;
        if(newRect.w>100 && newRect.w<130)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=2;
        if(newRect.w>130 && newRect.w<185)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=3;
       if(newRect.w>185 && newRect.w<219)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=4;
       else if(newRect.w>220 && newRect.w<263)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=5;
        else if(newRect.w>263 && newRect.w<360)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=6;
        else if(newRect.w>360 && newRect.w<365)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=7;
        else if(newRect.w>365 && newRect.w<405)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=8;
        else if(newRect.w>405 && newRect.w<440)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=9;
        else if(newRect.w>440)
        this.textDesigns[this.selectedTextBoxIndex].fontSize=10;

    },
    selectImage () {
          this.$refs.fileInput.click()
    },
    pickFile () {
        let input = this.$refs.fileInput
        let file = input.files
        let self=this;
        if (file && file[0]) {
          let reader = new FileReader
          reader.onload = e => {
            // this.previewImage = e.target.result
            self.addLogo(e.target.result);
          }
          reader.readAsDataURL(file[0])
          this.$emit('input', file[0])
        }
    },
    checkvalue(){
        //   console.info('event');
    },
      selectItem(index){
        //   console.info('index',index);
          this.selectedTextBoxIndex=index;
          this.selectDesignbar('textOptions');

          this.textDesigns.forEach((item,index_textDesign) => {
              if(index_textDesign==this.selectedTextBoxIndex)
                item.selected=true;
             else
                item.selected=false;
          });
        //   console.info('this.textDesigns',this.textDesigns);
      },
      colorChanged(){
        //   console.info('this.color',this.colors);
          this.backgroundImage="";
      },
      gobackAndEdit(){
        this.selectGlobalMenuItems('designYourBadge');
      },
      selectItemClipart(index){
        //   console.info('index',index);
          this.selectedClipartIndex=index;
        //   this.selectDesignbar('textOptions');

          this.clipartDesigns.forEach((item,index_clipartDesign) => {
              if(index_clipartDesign==this.selectedClipartIndex)
                item.selected=true;
             else
                item.selected=false;
          });
        //   console.info('this.textDesigns',this.textDesigns);
      },
      selectItemLogo(index){
        //   console.info('index',index);
          this.selectedLogoIndex=index;
        //   this.selectDesignbar('textOptions');

          this.logoDesigns.forEach((item,index_LogoDesign) => {
              if(index_clipartDesign==this.selectedLogoIndex)
                item.selected=true;
             else
                item.selected=false;
          });
        //   console.info('this.textDesigns',this.textDesigns);
      },
      selectGlobalMenuItems(menuName){
          this.menu.global_items.designYourBadge='designYourBadge'==menuName;
          this.menu.global_items.addNames='addNames'==menuName;
          this.menu.global_items.completeOrder='completeOrder'==menuName;
      },
      selectDesignbar(menuName){
          this.menu.sizeShape = 'sizeShape'==menuName;
          this.menu.fastener= 'fastener' == menuName;
          this.menu.border= 'border'==menuName;
          this.menu.textOptions = 'textOptions'==menuName;
          this.menu.background= 'background'== menuName;
          this.menu.dome= 'dome'== menuName;
      },
      deleteText(){
          let textDesignsLength=this.textDesigns.length;
          if(textDesignsLength>1){
                this.textDesigns.splice(this.selectedTextBoxIndex,1);
                this.selectItem(0);
          }
          this.setDataToNamesArray();
      },
      setDataToNamesArray(push=false,index=-1){
          if(!push){
             console.info('not pushed',push);
             this.addNames=[];
          }
          if(index>=0)
          this.addNames[index][0].is_edit=false;
          let textDesigns= this.textDesigns.map(item=>{
              console.info('item',item);
              return {
                ...item,
                text: "",
                quantity : 1,
                is_edit:true
              };
          })
          this.addNames.push(textDesigns);
          console.info('this.addNames',this.addNames);
      },
       getCustomDesignClass(index){
          return {
            'font-italic': 'font-italic' == this.textDesigns[index].fontStyle,
            'font-weight-bold': 'font-weight-bold'==this.textDesigns[index].fontStyle,
            // 'font-size20': 'font-size20'==this.textDesigns[index].fontSize,
            // 'font-size35': 'font-size35'==this.textDesigns[index].fontSize,
            // 'font-size50': 'font-size50'==this.textDesigns[index].fontSize,
            // 'font-coloRed': 'font-coloRed'==this.textDesigns[index].fontColor,
            // 'font-colorGreen': 'font-colorGreen'==this.textDesigns[index].fontColor,
            // 'font-colorBlue': 'font-colorBlue'==this.textDesigns[index].fontColor,
            'fnt2'   : 'fnt2'  == this.textDesigns[index].font,
            'fnt4'  :  'fnt4' == this.textDesigns[index].font,
            'fnt28'  : 'fnt28' == this.textDesigns[index].font,
            'fnt5'  : 'fnt5' == this.textDesigns[index].font,
            'fnt6'  : 'fnt6' == this.textDesigns[index].font,
            'fnt7': 'fnt7'== this.textDesigns[index].font,
            'fnt8': 'fnt8'== this.textDesigns[index].font,
            'fnt9': 'fnt9'== this.textDesigns[index].font,
            'fnt10': 'fnt10'== this.textDesigns[index].font,
            'fnt11': 'fnt11'== this.textDesigns[index].font,
            'fnt12': 'fnt12'== this.textDesigns[index].font,
            'fnt13': 'fnt13'== this.textDesigns[index].font,
            'fnt15': 'fnt15'== this.textDesigns[index].font,
            'fnt17': 'fnt17'== this.textDesigns[index].font,
            'fnt22': 'fnt22'== this.textDesigns[index].font,
            'fnt23': 'fnt23'== this.textDesigns[index].font,
            'fnt19': 'fnt19'== this.textDesigns[index].font,
            'fnt20': 'fnt20'== this.textDesigns[index].font
         }
      },
      addText(){
          if(this.textDesigns.length==4) return;
          this.addTextIndex++;
          this.textDesigns.push(
               {
                    x:390 + (this.addTextIndex * 10),
                    y:85 + (this.addTextIndex * 10),
                    // y:70 + (this.addTextIndex * 10),
                    weight:160,
                    height:55,
                    angle: 0,
                    text: "Your text",
                    font:"fnt2",
                    fontStyle: "",
                    fontSize: 3,
                    fontColor: "",
                    selected:false
                }
          );
          this.setDataToNamesArray();
      },
      addClipart(i){
          this.addClipartIndex++;
          this.clipartDesigns.push(
               {
                    x:150 + (this.addClipartIndex * 11),
                    y:60 + (this.addClipartIndex * 11),
                    // y:60 + (this.addClipartIndex * 11),
                    weight:100,
                    height:60,
                    angle: 0,
                    img: `/clipart/${i}/${i}.png`,
                    selected:false
                }
          );
      },
      addLogo(imgSrc){
          this.addLogoIndex++;
          this.logoDesigns.push(
               {
                    x:120 + (this.addLogoIndex * 11),
                    y:20 + (this.addLogoIndex * 11),
                    // y:80 + (this.addLogoIndex * 11),
                    weight:200,
                    height:120,
                    angle: 0,
                    img: imgSrc,
                    selected:false
                }
          );
      },
      finishedAddingNames(){
          let tempAddNames= this.addNames.slice();
          tempAddNames.pop();
          console.info('this.addNames',tempAddNames);
          let original_name="";
          let obj= {
              original_order:{
                  image:this.output,
                  names:this.textDesigns.map(item=>{
                      return item.text;
                  }),
                  quantity:this.textDesigns[0].quantity,
                  price : this.getPrice
              },
              sub_order:{
                  names:tempAddNames.map((names,index)=>
                       names.map(item=>{
                          return {
                              name:item.text,
                              quantity: item.quantity,
                              price : this.getPrice
                              }
                      }),
                  )
              }
          };
          console.info('obj',obj);
      },
      calculatePrice(type,fasteners=false){
                return this.priceStructures[type][0];
          
      },
      async printThis() {
    //   console.log("printing..");
      const el = this.$refs.printcontent;
      // add option type to get the image version
      // if not provided the promise will return 
      // the canvas.
      const options = {
        type: 'dataURL'
      }
      this.output = await this.$html2canvas(el, options);
      this.selectGlobalMenuItems('addNames');
    }
  }
};
</script>

<style scoped>
dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem !important;
}
        /* .container{
            margin-top: 9%;
            margin-bottom: 6%;
        }  */
        .shadow {
            box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 29%)
        }
        .design-area {
            width: 100%;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 20px 0px #dcdcdc;
        }

     
        .rectangle1-3 {
            height: 198px;
        }

        .rectangle1-5-3 {
            height: 290px;
        }

        .oval1-3 {
            height: 244px;
            border-radius: 50% !important;
        }

        .rectangle12-3 {
            height: 367px;

        }
        .font-size50 {
                font-size: 50px;
        }

        .font-size35 {
                font-size: 35px;
        }
        .font-coloRed {
                color: red;
        }
        .font-colorGreen {
                color: green;
        }
        .font-colorBlue{
            color: blue;
        }
        .no-border{
            border: none;
        }
        .gold-border{
                border: 9px solid #ffed4a;
        }
        .silver-border{
                border: 9px solid #b8b7b2;
        }
        .black-border{
                border: 9px solid #050505;
        }
        .rose-border{
                border: 9px solid #c07b86;
        }

        .selected-material-box{
            border: 3px solid #3a00ff !important;
        }
        .cursor-pointer{
            cursor:pointer;
        }
        .custom-background-img{
            max-height: 400px;
            overflow: scroll;
            overflow-x: hidden;
        }
.fnt1, #fnt1{font-family:"Andale Mono";}


.fnt2, #fnt2{font-family:Arial;}


.fnt3, #fnt3{font-family:"Arial Black";}


.fnt4, #fnt4{font-family:"CenturyGothic";}


.fnt5, #fnt5{font-family:"ComicSansMS";}


.fnt6, #fnt6{font-family:"Courier New";}

.fnt7, #fnt7{font-family:Georgia;}


.fnt8, #fnt8{font-family:impact;}


.fnt9, #fnt9{font-family:"Times New Roman";}


.fnt10, #fnt10{font-family:"Trebuchet MS";}

.fnt11, #fnt11{font-family:Verdana;}

.fnt12, #fnt12{font-family: 'GothamBold';}

.fnt13, #fnt13{font-family: 'cormorant_garamondmedium';}

.fnt14, #fnt14{font-family: 'FuturaBT-BoldCondensed';}

.fnt15, #fnt15{font-family: 'lobster_1.3regular';}

.fnt16, #fnt16{font-family: 'scriptinaregular';}

.fnt16, #fnt16 {
  vertical-align: text-top !important;
  line-height: 1.5 !important; 
}

.fnt17, #fnt17{font-family: 'OldEnglishTextMT';}


.fnt18, #fnt18{font-family: 'robotoregular';}

 .fnt19, #fnt19{font-family: 'ARDESTINE';} 

.fnt20, #fnt20{font-family: 'ARBONNIE';}

.fnt22, #fnt22{font-family: 'MonotypeCorsiva';}
.fnt23, #fnt23{font-family: 'scriptoriasskregular';}

.fnt24, #fnt24{font-family: 'ColoredCrayons';}
.fnt25, #fnt25{font-family: 'EraserRegular';}
.fnt26, #fnt26{font-family: 'Return_To_Sender';}
.fnt27, #fnt27{font-family: 'KGSecondChancesSketch';}
.fnt28, #fnt28{font-family: 'CenturyGothicBold';}




.clipart-custom{
    max-height: 307px;
    overflow-y: scroll;
}

.fastener-img {
    width: 100px;
    height: 60px;
}
.selected_fastener{
    border: 2px solid blue !important;
}
.color-picker-custom{
    width: 100%;
}
.color-row span{
    width: 22px;
    height: 22px;
    display: inline-block;
    background: red;
    border-radius: 100%;
    border: 2px solid white;
    box-shadow: 0 0 0px 1px initial;
    margin: 7px;
    cursor: pointer;
}
.color-row span.active{
    box-shadow: 0 0 0px 2px #1491d0;
}
.price{
    font-size: 30px;
    font-weight: 600;
    color: #107fb7;
    display: table;
    width: 100% !important;
    margin-top: 10px;
}

.price b {
    font-size: 30px;
    font-weight: normal;
}
.price-table {
    width: 100%;
    height: 124px;
    margin: 20px 0;
    border: 0;
    padding: 0;
    clear: both;
}
.table_wrap {
    margin-bottom: 15px;
}
.title_table {
    background-color: #f8f8f8;
    padding: 15px 20px;
    border: 1px solid #eaeaea;
}
.ttl {
    font-size: 18px;
    color: #474747;
    display: inline-block;
    font-weight: 600;
}
.text-imp {
    float: right;
}
.table_wrap .table {
    margin-bottom: 20px;
    max-width: 100%;
    width: 100%;
    -webkit-box-shadow: 0px 3px 10px 0px rgb(0 0 0 / 9%);
    -moz-box-shadow: 0px 3px 10px 0px rgba(0,0,0,0.09);
    box-shadow: 0px 3px 10px 0px rgb(0 0 0 / 9%);
}
.vue-step-wizard {
    background-color: #f7f8fc;
    width: 100%;
    margin: auto;
    padding: 10px;
}

#fieldset-tbl.table {
    display: inline-table !important;
    padding: 0 !important;
    margin-top: 3%;
}

element.style {
}
#fieldset-tbl.table > tbody > tr > td, #fieldset-tbl.table > tbody > tr > th, #fieldset-tbl.table > tfoot > tr > td, #fieldset-tbl.table > tfoot > tr > th, #fieldset-tbl.table > thead > tr > td, #fieldset-tbl.table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
    padding: 8px;
    border-bottom: none;
}
.table th, .table td {
    padding: 10px 0;
    color: #000;
}
.qty {
    text-align: center;
    width: 41px;
    margin-right: 30px;
    padding: 0;
}
#fieldset-tbl .btn .edit {
    background-color: #ff9a04;
}
#fieldset-tbl .btn .remove {
    background-color: #ff3131;
    margin-left: 10px;
}

#fieldset-tbl .btn .edit, #fieldset-tbl .btn .remove, #fieldset-tbl .btn .accept {
    background-image: none !important;
    background-position: unset !important;
    color: #fff !important;
    display: inline;
    height: auto;
    padding: 5px 20px;
    text-indent: 0 !important;
    vertical-align: middle !important;
    width: auto !important;
    margin-right: 0;
}

#fieldset-tbl .btn .done {
    background-color: #A1BB3C;
}

#fieldset-tbl.table-bordered {
    border: 1px solid #ddd;
}


.imagePreviewWrapper {
    width: 250px;
    height: 250px;
    display: block;
    cursor: pointer;
    margin: 0 auto 30px;
    background-size: cover;
    background-position: center center;
}
.visited {
    border-color: #000 !important;
}
.price_yable-custom-margin{
    /* margin-top: 30px !important; */
}

.cursor-pointer{
    cursor: pointer;
}
.design_tool_custom{
    position: relative;
}
.custom_height_60{
    height:60px;
}

</style>