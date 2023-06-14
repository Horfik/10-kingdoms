<template>
    <div class="">
        <span>
            <slot/>
        </span>
    </div>
</template>

<script>
export default {
    name: "TextInLine"
}
</script>

<style scoped>
div{
    position: relative;
    overflow: hidden;
    font-family: cursive;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
}
span {
    display: inline-block;
    margin: 0 .4em;
}
span:before, span:after{
    content: '';
    position: absolute;
    width: 100%;
    border-top: 2px solid #4e4e4e;
    margin-top: .6em;
}
span:before {
    margin-left: -102%;
}
span:after {
    margin-left: 2%;
}
</style>
