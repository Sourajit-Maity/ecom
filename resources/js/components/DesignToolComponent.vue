<template>
<div class="container">
            <div class="row">
                <div class="col-md-4">
                                <button class="btn btn-lg btn-outline-info  btn-block" style="text-transform: uppercase;"  :disabled="!menu.global_items.designYourBadge" :class="{'btn-outline-danger':menu.global_items.designYourBadge }">DESIGN YOUR BADGE</button>
                </div>
                <div class="col-md-4">
                                <button class="btn btn-lg btn-outline-info  btn-block" style="text-transform: uppercase;"  :disabled="!menu.global_items.addNames" :class="{'btn-outline-danger':menu.global_items.addNames }">ADD NAMES</button>
                </div>
                <div class="col-md-4">
                                <button class="btn btn-lg btn-outline-info  btn-block" style="text-transform: uppercase;" @click="selectGlobalMenuItems('completeOrder')" :disabled="!menu.global_items.completeOrder" :class="{'btn-outline-danger':menu.global_items.completeOrder }">COMPLETE ORDER</button>
                </div>
            </div>
            <div v-show="menu.global_items.designYourBadge">
            <div class="row mt-3">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn mr-2" :class="[menu.sizeShape  ? 'btn-danger' : 'btn-dark']" @click="selectDesignbar('sizeShape')">
                                    Size/Shape
                                </button>
                                <button class="btn mr-2" :class="[menu.background  ? 'btn-danger' : 'btn-dark']" @click="selectDesignbar('background')">
                                    Background
                                </button>
                                <button class="btn  mr-2" :class="[menu.border  ? 'btn-danger' : 'btn-dark']" @click="selectDesignbar('border')">
                                    Frame
                                </button>
                                <button class="btn  mr-2" :class="[menu.fastener  ? 'btn-danger' : 'btn-dark']" @click="selectDesignbar('fastener')">
                                    Fastener
                                </button>
                                <!-- <button class="btn btn-dark mr-2" disabled>
                                    Fastener
                                </button>
                                <button class="btn btn-dark mr-2" disabled>
                                    Dome
                                </button> -->
                            </div>
                            <div class="col-md-12 mt-4" ref="printcontent">
                                <div class="design-area shadow" v-bind:class="getShapeClass" :style="{backgroundColor : colors.hex}">
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

                            </div>
                    </div>
                   
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <button class="btn btn-lg btn-success  btn-block mt-2" style="text-transform: uppercase;"  @click="printThis">Finished Designing</button>
                                </div>
                            <div class="col-md-6">
                                <div class="price">Price: <b>$</b><span>9.99</span> each</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-success mr-2" @click="addText">
                                    Add Text
                                </button>
                                <button class="btn btn-warning mr-2" @click="selectImage">
                                    Add Logo
                                </button>
                                    <input
                                    ref="fileInput"
                                    type="file"
                                    @input="pickFile" style="display: none;">

                                            <!-- <div
                                            class="imagePreviewWrapper"
                                            :style="{ 'background-image': `url(${previewImage})` }"
                                            >
                                            </div> -->
                                <button class="btn btn-primary mr-2" @click="$modal.show('clipart-modal')">
                                    Add Clipart
                                </button>
                            </div>
                            <div class="col-md-12">
                                <div class="card mt-4" v-if="menu.fastener">
                                    <div class="card-header">
                                        <b>FASTENER OPTIONS</b>
                                    </div>
                                    <ul class="list-group list-group-flush ul-custom-height">
                                        <li class="list-group-item">
                                            <div class="row">
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span @click="selected_fastener = 'Jewelers'"><img class="fastener-img border p-1" :class="{'selected_fastener': 'Jewelers'== selected_fastener}" src="/fasteners/Jeweler_s Pin.png">Jewelers Pin</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span @click="selected_fastener = 'Magnet'"><img class="fastener-img border p-1" :class="{'selected_fastener': 'Magnet'== selected_fastener}" src="/fasteners/Magnet.jpg">Magnet</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span @click="selected_fastener = 'Pin'"><img class="fastener-img border p-1" :class="{'selected_fastener': 'Pin'== selected_fastener}" src="/fasteners/Pin.jpg">Pin</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span @click="selected_fastener = 'Swivel'" ><img class="fastener-img border p-1" :class="{'selected_fastener': 'Swivel'== selected_fastener}" src="/fasteners/Swivel Bulldog.png">Swivel Clip</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card mt-4" v-if="menu.sizeShape">
                                    <div class="card-header">
                                        <b>SELECT A SIZE/ SHAPE</b>
                                    </div>
                                    <ul class="list-group list-group-flush ul-custom-height">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"> <button class="btn btn-block mb-2" :class="[shapeDefaultClass == 'rectangle1-3' ? 'btn-danger' : 'btn-dark']" @click="shapeDefaultClass = 'rectangle1-3'">1"x3" Rectangle</button></div>
                                                <div class="col-md-6"><button class="btn  btn-block mb-2" :class="[shapeDefaultClass == 'rectangle1-5-3' ? 'btn-danger' : 'btn-dark']" @click="shapeDefaultClass = 'rectangle1-5-3'">1.5"x3" Rectangle</button></div>
                                                <div class="col-md-6"><button class="btn  btn-block"  :class="[shapeDefaultClass == 'oval1-3' ? 'btn-danger' : 'btn-dark']"@click="shapeDefaultClass = 'oval1-3'">Oval</button></div>
                                                <div class="col-md-6"><button class="btn  btn-block" :class="[shapeDefaultClass == 'rectangle12-3' ? 'btn-danger' : 'btn-dark']" @click="shapeDefaultClass = 'rectangle12-3'">2"x3" Rectangle</button></div>
                                                <!-- <div class="col-md-6"><button class="btn btn-success  btn-block mt-2"  @click="printThis">Print</button></div> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card mt-4" v-if="menu.textOptions">
                                    <div class="card-header">
                                        <b>TEXT OPTIONS</b>
                                    </div>
                                    <div class="card-body">
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
                                                <button class="btn btn-danger" @click="deleteText">Delete Text</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-4" v-if="menu.border">
                                    <div class="card-header">
                                        <b>FRAME OPTIONS</b>
                                    </div>
                                    <ul class="list-group list-group-flush ul-custom-height ul-custom-height">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-6"> <button class="btn btn-block mb-2" :class="[borderDefaultClass == 'gold-border' ? 'btn-danger' : 'btn-dark']" @click="borderDefaultClass = 'gold-border'">Gold Frame</button></div>
                                                <div class="col-md-6"><button class="btn  btn-block mb-2" :class="[borderDefaultClass == 'silver-border' ? 'btn-danger' : 'btn-dark']" @click="borderDefaultClass = 'silver-border'">Silver Frame</button></div>
                                                <div class="col-md-6"><button class="btn  btn-block mb-2"  :class="[borderDefaultClass == 'black-border' ? 'btn-danger' : 'btn-dark']" @click="borderDefaultClass = 'black-border'">Black Frame</button></div>
                                                <!-- <div class="col-md-6"><button class="btn  btn-block" :class="[borderDefaultClass == 'rose-border' ? 'btn-danger' : 'btn-dark']" @click="borderDefaultClass = 'rose-border'">Rose Frame</button></div> -->
                                                <div class="col-md-6"><button class="btn  btn-block" :class="[borderDefaultClass == 'no-border' ? 'btn-danger' : 'btn-dark']" @click="borderDefaultClass = 'no-border'">No Frame</button></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card mt-4" v-if="menu.background">
                                    <div class="card-body">
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
                                                <div class="row">
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/White-Plastic/1.png'"><img class="border" src="/background/Material/White-Plastic/1-thumb.png">White - Plastic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer" v-if="this.shapeDefaultClass!='oval1-3' "><span  @click="backgroundImage= '/background/Material/Gold-Plastic/7.png'"><img class="border" src="/background/Material/Gold-Plastic/7-thumb.png">Gold - Plastic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer" v-if="this.shapeDefaultClass!='oval1-3' "><span  @click="backgroundImage= '/background/Material/Silver-Plastic/8.png'"><img class="border" src="/background/Material/Silver-Plastic/8-thumb.png">Silver - Plastic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/Gold-Metallic/5.png'"><img class="border" src="/background/Material/Gold-Metallic/5-thumb.png">Gold Metallic</span></div>
                                                    <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/Silver-Metallic/6.png'"><img class="border" src="/background/Material/Silver-Metallic/6-thumb.png">Silver Metallic</span></div>
                                                    <!-- <div class="col-md-4 pt-4 cursor-pointer"><span  @click="backgroundImage= '/background/Material/Wood-Grain/11.png'"><img  class="border" src="/background/Material/Wood-Grain/11-thumb.png">Wood Grain</span></div> -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="colors" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="row">
                                                <photoshop-picker v-model="colors" class="color-picker-custom mt-2" @input="colorChanged" />
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="row custom-background-img">
                                                    <div class="col-md-4 cursor-pointer pt-4" v-for="i in 37" :key="i"><img style="height:60px; width:100px;" class="border" :src="'/background/Custom/' + i + '/thumb.png'" @click="backgroundImage= '/background/Custom/' + i + '/' + i + '.png'"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-lg btn-success  btn-block mt-2" style="text-transform: uppercase;"  @click="printThis">Finished Designing</button>
                            </div>
                    </div> -->
                    </div>
                    <modal name="clipart-modal" :adaptive="true" :draggable="true">
                        <div class="row p-4 clipart-custom">
                                <div class="col-md-3 cursor-pointer pt-4" v-for="i in 36" :key="i"><img style="height:60px; width:100px;" :src="'/clipart/' + i + '/thumb.png'" @click="addClipart(i)"></div>
                        </div>
                    </modal>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="price-table">
        <div class="table_wrap">
        <div class="title_table"><span class="ttl">Quantity Price</span><span class="text-imp">*These prices will update automatically based on the design you choose above!</span></div>
        <table class="table spec_tb">
        <tbody><tr>
        <td>QTY:</td>
        <td>1-10</td>
        <td>11-20</td>
        <td>21-30</td>
        <td>31-50</td>
        <td>51-100</td>
        <td>101-250</td>
        <td>251-1000</td>
        <td>1000+</td>
        </tr>
        <tr>
        <td>Price:</td>
        <td class="it-0">$9.99</td>
        <td class="it-1">$9.59</td>
        <td class="it-2">$9.39</td>
        <td class="it-3">$9.24</td>
        <td class="it-4">$8.89</td>
        <td class="it-5">$8.49</td>
        <td class="it-6">$8.24</td>
        <td class="it-7">$7.49</td>
        </tr>
        </tbody></table>
        </div>
        </div>
            </div>
        </div>
            </div>
            <div v-show="menu.global_items.addNames">
                    <div class="row" v-show="!menu.global_items.addOrEditNames">
                        <div class="col-md-12 mt-5 d-flex justify-content-center">
                                <div class="design-area"  v-if="output">
                                    <img :src="output" class="w-100">
                                </div>
                        </div>
                         <div class="col-md-12 mt-5 d-flex justify-content-center">
                             <div class="row">
                                 <div class="col-md-6">
                                     <button class="btn btn-info btn-block" style="height: 55px;" @click="gobackAndEdit">Go back & edit badge</button>
                                 </div>
                                 <div class="col-md-6">
                                     <button class="btn btn-primary btn-block" style="height: 55px;" @click="menu.global_items.addOrEditNames= true">Add or edit names</button>
                                 </div>
                                 <div class="col-md-12">
                                     <button class="btn btn-success btn-block mt-2" style="height: 55px;" disabled>I am finished adding name</button>
                                 </div>
                             </div>
                         </div>
                    </div>
                    <div class="row" v-show="menu.global_items.addOrEditNames">
                        <div class="col-md-12 mt-5">
                            <p style="line-height: 20px;">Please add all the names and quantities you want for your name badges. (All name badges will keep the same design formatting)<br>
                            **You will not see a proof of all the individual name badges. <br>***We will match all the additional names to your first design and make sure all the text fits properly.<br></p>
                            <div>
<table class="table table-bordered" id="fieldset-tbl" style="width:100%" cellspacing="0">
<thead>
    <tr>
        <th width="30" align="left">No</th>
        <th align="left">Field 1</th>
        <th width="20">&nbsp;</th>
        <th class="qty">Quantity</th>
        <th width="20">&nbsp;</th>
        <th width="180">&nbsp; </th>
    </tr>
</thead>
<tbody>
    <tr id="line13667324" class="line">
        <td>1.</td><td class="text">john</td>
        <td style="background-color: #f3f3f3;"><a class="less" href="javascript:;">-</a></td>
        <td class="qty">
        <input type="text" value="1" name="qty" class="sqty" disabled="">
        </td>
        <td style="background-color: #f3f3f3;"><a class="more" href="javascript:;">+</a></td>
        <td class="btn">
        <a class="btn btn-success" href="javascript:;">DONE</a>
        <a class="btn btn-info" href="javascript:;">EDIT</a>
        <!-- <a class="btn btn-danger" href="javascript:;">DELETE</a> -->
        </td>
    </tr>
    <tr id="line" class="">
        <td>&nbsp;</td>
        <td class="text"><input type="text" name="text1"></td>
        <td>&nbsp;</td>
        <td class="qty"><input type="text" id="newqty" name="qty" value="1" class="sqty"></td>
        <td>&nbsp;</td>
        <td class="btn"><a href="javascript:;" class="accept">+ ADD NAME</a></td>
    </tr>
</tbody>
</table>
</div>
                        </div>
                         <div class="col-md-12 mt-5 d-flex justify-content-center">
                             <div class="row">
                                 <div class="col-md-6">
                                     <button class="btn btn-danger btn-block"  @click="menu.global_items.addOrEditNames= false">GO BACK</button>
                                 </div>
                                 <div class="col-md-6">
                                     <button class="btn btn-success btn-block"  @click="menu.global_items.addOrEditNames= true">FINISHED</button>
                                 </div>
                             </div>
                         </div>
                    </div>

            </div>

  </div>
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
        //   number: 10,
            textDesigns:[
                {
                    x:300,
                    y:70,
                    weight:160,
                    height:55,
                    angle: 0,
                    text: "Your text",
                    font:"fnt2",
                    fontStyle: "",
                    fontSize: 3,
                    fontColor: "#000000",
                    selected:false
                }
            ],
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
      getShapeClass(){
        //   console.info('textDesigns[selectedTextBoxIndex].fontSize',this.textDesigns[this.selectedTextBoxIndex].fontSize);
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
      }
  },
  methods: {
    //   itemChange(event){
    //       console.info('event',event);
    //   },
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
      },
      deleteText(){
           this.textDesigns.splice(this.selectedTextBoxIndex,1)
           if(this.textDesigns.length>0)
                this.selectItem(0);
           else this.menu.textOptions=false;
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
                    x:300 + (this.addTextIndex * 10),
                    y:70 + (this.addTextIndex * 10),
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
      },
      addClipart(i){
          this.addClipartIndex++;
          this.clipartDesigns.push(
               {
                    x:150 + (this.addClipartIndex * 11),
                    y:60 + (this.addClipartIndex * 11),
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
                    x:150 + (this.addLogoIndex * 11),
                    y:80 + (this.addLogoIndex * 11),
                    weight:200,
                    height:120,
                    angle: 0,
                    img: imgSrc,
                    selected:false
                }
          );
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
        .container{
            margin-top: 9%;
            margin-bottom: 6%;
        }
        .shadow {
            box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 29%)
        }
        .design-area {
            width: 566px;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
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
/* .font-fnt2{
    font-family:Arial;

}
.font-fnt4{
    font-family:serif;
}
.font-fnt28{
    font-family:monospace;
}
.font-fnt5{
    font-family:cursive;
}
.font-fnt6{
    font-family:OldEnglishTextMT;
} */


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
    /* border-bottom: 1px solid #31A3D9; */
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
/* .vue-step-wizard{
    width:0px;
} */

.imagePreviewWrapper {
    width: 250px;
    height: 250px;
    display: block;
    cursor: pointer;
    margin: 0 auto 30px;
    background-size: cover;
    background-position: center center;
}
</style>