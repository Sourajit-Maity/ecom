<template>
   <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark mr-2" @click="selectDesignbar('sizeShape')">
                            Size/Shape
                        </button>
                        <button class="btn btn-dark mr-2" disabled>
                            Background
                        </button>
                        <button class="btn btn-dark mr-2" disabled>
                            Border
                        </button>
                        <button class="btn btn-dark mr-2" disabled>
                            Fastener
                        </button>
                        <button class="btn btn-dark mr-2" disabled>
                            Dome
                        </button>
                    </div>
                    <div class="col-md-12 mt-4" ref="printcontent">
                        <div class="design-area rounded shadow" v-bind:class="getShapeClass" >
                <drr
                :x="textDesign.x"
                :y="textDesign.y"
                :w="textDesign.weight"
                :h="textDesign.height"
                :angle="textDesign.angle"
                :selected="textDesign.selected"
                :aspectRatio="true"
                @select="selectItem(index)"
                @change="itemChange" 
                :innerBox="innerBox"
                :outerBox="outerBox"
                v-for="(textDesign,index) in textDesigns" :key="index"
                >
                        <span style="width: 100%; height: 100%" v-bind:class="getCustomDesignClass(index)">{{textDesign.text}}</span>
                </drr>

                    </div>
            </div>
            </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success mr-2" @click="addText">
                            Add Text
                        </button>
                        <button class="btn btn-warning mr-2" disabled>
                            Add Logo
                        </button>
                        <button class="btn btn-primary mr-2" disabled>
                            Add Clipart
                        </button>
                    </div>
                    <div class="col-md-12">
                        <div class="card mt-4" v-if="menu.sizeShape">
                            <div class="card-header">
                                <b>SELECT A SIZE/ SHAPE</b>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-6"> <button class="btn btn-block mb-2" :class="[shapeDefaultClass == 'rectangle1-3' ? 'btn-danger' : 'btn-dark']" @click="shapeDefaultClass = 'rectangle1-3'">1"x3" Rectangle</button></div>
                                        <div class="col-md-6"><button class="btn  btn-block mb-2" :class="[shapeDefaultClass == 'rectangle1-5-3' ? 'btn-danger' : 'btn-dark']" @click="shapeDefaultClass = 'rectangle1-5-3'">1.5"x3" Rectangle</button></div>
                                        <div class="col-md-6"><button class="btn  btn-block"  :class="[shapeDefaultClass == 'oval1-3' ? 'btn-danger' : 'btn-dark']"@click="shapeDefaultClass = 'oval1-3'">1"x3" Oval</button></div>
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
                                 <!-- <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Font</label>
                                    <div class="col-sm-9">
                                            <select id="inputState" class="form-control">
                                            <option id="fnt2" selected="selected">Arial</option>
                                            <option id="fnt4">Century Gothic</option>
                                            <option id="fnt28">Century Gothic Bold</option>
                                            <option id="fnt5">Comic Sans MS</option>
                                            <option id="fnt6">Courier New</option>
                                            <option id="fnt7">Georgia</option>
                                            <option id="fnt8">Impact</option>
                                            <option id="fnt9">Times New Roman</option>
                                            <option id="fnt10">Trebuchet MS</option>
                                            <option id="fnt11">Verdana</option>
                                            <option id="fnt12">Gotham</option>
                                            <option id="fnt13">Cormorant Garamond Medium</option>
                                            <option id="fnt15">Lobster</option>
                                            <option id="fnt17">Old English TextMT</option>
                                            <option id="fnt22">MonotypeCorsiva</option>
                                            <option id="fnt23">Scriptoria SSK</option>
                                            <option id="fnt19">Ardestine</option>
                                            <option id="fnt20">Arbonnie</option>
                                            </select>
                                    </div>
                                </div> -->
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
                                     <select id="inputState" class="form-control" v-model="textDesigns[selectedTextBoxIndex].fontSize">
                                            <option value="font-size20">10</option>
                                            <option value="font-size35">20</option>
                                            <option value="font-size50">30</option>
                                     </select>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-9">
                                     <select id="inputState" class="form-control" v-model="textDesigns[selectedTextBoxIndex].fontColor">
                                        <option value="">Black</option>
                                        <option value="font-coloRed">Red</option>
                                        <option value="font-colorGreen">Green</option>
                                        <option value="font-colorBlue">Blue</option>
                                     </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                         <img :src="output">
                    </div>
                </div>

            </div>
  </div>
</template>

<script>
//https://vuejsfeed.com/blog/drag-and-resize-elements-with-vuedraggableresizable
import VueHtml2Canvas from 'vue-html2canvas';
import drr from '@minogin/vue-drag-resize-rotate'

export default {
//   name: 'about-us',
    components: {
    VueHtml2Canvas,drr
  },
  mounted() {
    console.log("This is about component");
  },
  data(){
      return {
          addTextIndex:0,
          selectedTextBoxIndex:0,
            textDesigns:[
                {
                    x:300,
                    y:70,
                    weight:200,
                    height:70,
                    angle: 0,
                    text: "Your text",
                    fontStyle: "",
                    fontSize: "font-size50",
                    fontColor: "",
                    selected:false
                }
        ],
        outerBox:{
            x:50,
            y:50,
            w:50,
            h:50,
        },
        innerBox:{
            x:50,
            y:50,
            w:50,
            h:50,
        },
            menu:{
                sizeShape:true,
                textOptions:false
            },
            output: null,
            shapeDefaultClass: 'rectangle1-3'
      }
  },
  computed:{
      getShapeClass(){
          return {
            'rectangle1-3': 'rectangle1-3' == this.shapeDefaultClass,
            'rectangle1-5-3': 'rectangle1-5-3'==this.shapeDefaultClass,
            'oval1-3': 'oval1-3'==this.shapeDefaultClass,
            'rectangle12-3': 'rectangle12-3'==this.shapeDefaultClass
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
      itemChange(event){
          console.info('event',event);
      },
      selectItem(index){
          console.info('index',index);
          this.selectedTextBoxIndex=index;
          this.selectDesignbar('textOptions');

          this.textDesigns.forEach((item,index_textDesign) => {
              if(index_textDesign==this.selectedTextBoxIndex)
                item.selected=true;
             else
                item.selected=false;
          });
          console.info('this.textDesigns',this.textDesigns);
      },
      selectDesignbar(menuName){
          this.menu.sizeShape = 'sizeShape'==menuName;
          this.menu.textOptions = 'textOptions'==menuName;
      },
       getCustomDesignClass(index){
          return {
            'font-italic': 'font-italic' == this.textDesigns[index].fontStyle,
            'font-weight-bold': 'font-weight-bold'==this.textDesigns[index].fontStyle,
            'font-size20': 'font-size20'==this.textDesigns[index].fontSize,
            'font-size35': 'font-size35'==this.textDesigns[index].fontSize,
            'font-size50': 'font-size50'==this.textDesigns[index].fontSize,
            'font-coloRed': 'font-coloRed'==this.textDesigns[index].fontColor,
            'font-colorGreen': 'font-colorGreen'==this.textDesigns[index].fontColor,
            'font-colorBlue': 'font-colorBlue'==this.textDesigns[index].fontColor
         }
      },
      addText(){
          this.addTextIndex++;
          this.textDesigns.push(
               {
                    x:300 + (this.addTextIndex * 10),
                    y:70 + (this.addTextIndex * 10),
                    weight:200,
                    height:70,
                    angle: 0,
                    text: "Your text",
                    fontStyle: "",
                    fontSize: "font-size50",
                    fontColor: "",
                    selected:false
                }
          );
      },
      async printThis() {
      console.log("printing..");
      const el = this.$refs.printcontent;
      // add option type to get the image version
      // if not provided the promise will return 
      // the canvas.
      const options = {
        type: 'dataURL'
      }
      this.output = await this.$html2canvas(el, options);
    }
  }
};
</script>

<style scoped>
        .shadow {
            box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 29%)
        }
        .design-area {
            width: 566px;
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
        
        </style>