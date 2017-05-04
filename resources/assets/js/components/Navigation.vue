<template>
	<nav>
	    <md-button class="md-icon-button" v-for="(item, index) in items" :key="index" :href="item.url" :title="item.name">
	    	<md-icon>{{ item.icon }}</md-icon>
	    </md-button>
	</nav>
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