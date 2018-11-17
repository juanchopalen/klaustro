<template>
    <div >
        <half-circle-spinner
          :animation-duration="1200"
          :size="150"
          color="#7D3E00"
          style="position:fixed;top:30%;left: 50%"
        />
    </div>
</template>

<script>
    import { HalfCircleSpinner } from 'epic-spinners'
    export default{
        components: {
            HalfCircleSpinner
        },
    }
</script>