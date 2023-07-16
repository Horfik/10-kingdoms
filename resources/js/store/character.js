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
        age: '',
        experience: ''
    }),
    mutations: {
        setCharacter(state, character) {
            console.log("setCharacter");
            state.id = character.id;
            state.name = character.name;
            state.race.name = character.race.name;
            state.race.talent = character.race.talent;
            state.player = character.player;
            state.concept = character.concept;
            state.age = character.age;
            state.experience = character.experience;
            state.money = character.money;
        },
        setAge(state, age) {
            state.age = age;
        },
        setExperience(state, experience){
            state.experience = experience;
        }
    },
    actions: {
        
    }
}
