<template>
	<div>
	    <md-button v-for="(item, index) in items" :key="index" :href="item.url">{{ item.name }}</md-button>
	</div>
</template>

<script>
	export default {
		props: ['menu'],

		computed: {
			items: function() {
				return JSON.parse(this.menu);
			}
		}
	}
</script>