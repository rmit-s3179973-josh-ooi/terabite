	Vue.component('count-button', {
  props: ['increment'],
  template: '<button class="btn btn-primary" @click.prevent="handleClick">\
    <slot></slot>\
  </button>',
  methods: {
    handleClick() {
      if (this.increment === 'up') {
        this.$emit('countUp');
      } else if (this.increment === 'down') {
        this.$emit('countDown');
      }
    }
  }
});

Vue.component('counter', {
  template: '<form class="form-inline">\
    <div class="form-group mx-sm-3">\
      <input type="text" class="form-control" :value="count" />\
    </div>\
    <count-button @countDown="onCountDown" increment="down">-</count-button>\
    <count-button @countUp="onCountUp" increment="up">+</count-button>\
  </form>',
  data() {
    return {
      count: 0
    }
  },
  methods: {
    onCountUp() {
      this.count += 1;
    },
    onCountDown() {
      this.count -= 1;
    }
  }
});

// create a root instance
new Vue({
  el: '#app'
});