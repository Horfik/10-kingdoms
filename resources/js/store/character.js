export const character = {
    state: () => ({
        id: '',
        name: '',
        race: {
            name: '',
            talent: ''
        },
        player: '',
        concept: '',
        age: 0,
        experience: 0,
        attributes: [],
    }),
    mutations: {
        setCharacter(state, character) {
            state.id = character.id;
            state.name = character.name;
            state.race = character.race;
            state.player = character.player;
            state.concept = character.concept;
            state.age = character.age;
            state.experience = character.experience;
            state.money = character.money;
        },
        setAttributes(state, attributes){
            state.attributes = attributes;
        },
    },
    actions: {
        
    }
}
