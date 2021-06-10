<template>
   <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark mr-2" >
                            Size/Shape
                        </button>
                        <button class="btn btn-dark mr-2">
                            Background
                        </button>
                        <button class="btn btn-dark mr-2">
                            Border
                        </button>
                        <button class="btn btn-dark mr-2">
                            Fastener
                        </button>
                        <button class="btn btn-dark mr-2">
                            Dome
                        </button>
                    </div>
                    <div class="col-md-12 mt-4" ref="printcontent">
                        <div class="design-area rounded shadow" v-bind:class="getShapeClass" >
                <drr
                :x="item.x"
                :y="item.y"
                :w="item.weight"
                :h="item.height"
                :angle="item.angle"
                :aspectRatio="true"
                @change="itemChange"
                >
                        <h1>Hello world</h1>
                </drr>
<!-- add any elements you would like to drag & resize-->
                                <!-- <vue-draggable-resizable :parent="true"  :max-width="30" :max-height="30">
                                <p>Your Text</p>
                                </vue-draggable-resizable> -->
                                <!-- <drr
    :x="textbox.x"
    :y="textbox.y"
    :w="textbox.weight"
    :h="textbox.height"
    :rotateable="false"
    :isActive="textbox.selected"
    :selectable="!textbox.locked"
    :hasActiveContent="true"
    @activated="selectItem(textbox.id)"
    @deactivated="deselectItem(textbox.id)"
    @dragstop="textboxDragStop(textbox, ...arguments)"
    @resizestop="textboxResizeStop(textbox, ...arguments)"
    @rotatestop="textboxRotateStop(textbox, ...arguments)"
     :innerBox="innerBox"
    :outerBox="outerBox"
>
          <TextBox />
</drr> -->
                    </div>
            </div>
            </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success mr-2">
                            Add Text
                        </button>
                        <button class="btn btn-warning mr-2">
                            Add Logo
                        </button>
                        <button class="btn btn-primary mr-2">
                            Add Clipart
                        </button>
                    </div>
                    <div class="col-md-12">
                        <div class="card mt-4">
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
export default {
//   name: 'about-us',
  mounted() {
    console.log("This is about component");
  },
  data(){
      return {
            item:{
                x:300,
                y:70,
                weight:200,
                height:50,
                angle: 0
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
      }
  },
  methods: {
      itemChange(event){
          console.info('event',event);
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