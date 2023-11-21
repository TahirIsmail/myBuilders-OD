import { defineStore } from 'pinia';
import axios from 'axios';

export const useQuestionnaireStore = defineStore('questionnaire', {
  state: () => ({
    jobCategories: [],
    
  }),

  actions: {
    
    async loadJobCategories() {
        try {
          const response = await axios.get('/api/job-categories');
          this.jobCategories = response.data;
        
        } catch (error) {
          console.error('Failed to load job categories:', error);
        }
      },
    

    
  },
});
