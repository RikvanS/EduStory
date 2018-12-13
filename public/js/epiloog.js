

function animate(){
  
    function rndRange(start, end){
      let diff = end - start;
      let chunk = diff * Math.random();
      let rnd = Math.floor(chunk);
      return rnd;
    }
    
    class ColorHandler {
      constructor({el}){
        this.el = el;
      }
  
      randomColor(){
        let [ start, end ] = [ 0, 255 ];
        return {
          r: rndRange(start, end),
          g: rndRange(start, end),
          b: rndRange(start, end)
        }
      }
  
      randomRgbaColorString(){
        let rndColor = this.randomColor();
        let {
          r, g, b,
        } = rndColor;
        let colorStr = `rgba(${r}, ${g}, ${b}, 0.4)`;
        return colorStr;
      }
  
      randomizeElementBgColor(el){
        this.el.style.backgroundColor = this.randomRgbaColorString();
      }
    }
    
    class ImageHandler {
      constructor({el}){
        this.el = el;
      }
      async getRandomImage(keyword){
        let baseUrl = 'https://media.giphy.com/media/C9j7r0tqYFUL7nidQl/giphy.gif';
        let imageUrl;
        try {
          let res = await axios.get(baseUrl + `?api_key=dc6zaTOxFJmzC&tag=${keyword}`);
          imageUrl = res.data.data.image_url;
        } catch(error){
          imageUrl = 'https://media.giphy.com/media/fgopKB1UvEA/giphy.gif';
        }
        return imageUrl;
      }
      
      async randomizeElementBgImage(){
        let imageUrl;
        try{
          imageUrl = await this.getRandomImage('trippy');
        } catch(error){
          imageUrl = '';
        }
        
        this.el.style.backgroundImage = `url('${imageUrl}')`
      }
      
    
    }
  
    function* wordGenerator(text){
      let wordArr = text.split(' ');
      let i = 0;
      while(true){
        let index = i%wordArr.length;
        i++;
        yield wordArr[index]
      }
    }
    
    class TextHandler {
      constructor({text, el}){
        this.text = text;
        this.generator = wordGenerator(text);
        this.el = el;
      }
      
      insertNextWord(){
        this.el.innerText = this.generator.next().value;
      }
      
    }
  
    
    
  
    function initializeAnimation(){
      const imageEl = document.getElementById('hallucination');
      const colorEl = document.getElementById('colors');
      const textEl = document.getElementById('text');
      
      const text = `A hallucination is a perception in the absence of external stimulus that has qualities of real perception. Hallucinations are vivid, substantial, and are perceived to be located in external objective space.`
      const th = new TextHandler({el:textEl, text})
      const ch = new ColorHandler({el:colorEl});
      const ih = new ImageHandler({el:imageEl});
      
      ih.randomizeElementBgImage();
      (async () => {
        await new Promise(r => setTimeout(r, 10000));
        ih.randomizeElementBgImage();
      })();
      const interval2 = setInterval(
        ()=>{
          ih.randomizeElementBgSize();
          ch.randomizeElementBgColor();
        },
        1000
      );
      
      
      setInterval(()=>{
         th.insertNextWord();
      }, 350)
    }
  
    initializeAnimation();
    
  };
  
  
  
  
  
  
  animate();