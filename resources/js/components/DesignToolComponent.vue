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
                :aspectRatio="true"
                @select="selectItem(index)"
                @change="itemChange" 
                :innerBox="innerBox"
                :outerBox="outerBox"
                v-for="(textDesign,index) in textDesigns" :key="index"
                >
                        <h1 style="width: 100%; height: 100%" >{{textDesign.text}}</h1>
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
                                SELECT A SIZE/ SHAPE
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
                                TEXT OPTIONS
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Your Text</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" v-model="getYourText" id="inputPassword" placeholder="Your Text">
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
                    height:50,
                    angle: 0,
                    text: "Your text"
                }
        ],
        outerBox:{
            x:300,
            y:70,
            weight:200,
            height:50,
        },
        innerBox:{
            x:300,
            y:70,
            weight:200,
            height:50,
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
      },
      selectDesignbar(menuName){
          this.menu.sizeShape = 'sizeShape'==menuName;
          this.menu.textOptions = 'textOptions'==menuName;
      },
      addText(){
          this.addTextIndex++;
          this.textDesigns.push(
               {
                    x:300 + (this.addTextIndex * 10),
                    y:70 + (this.addTextIndex * 10),
                    weight:200,
                    height:50,
                    angle: 0,
                    text: "Your text"
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
    </style>