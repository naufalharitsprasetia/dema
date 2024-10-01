/** @format */
import {
  ClassicEditor,
  AccessibilityHelp,
  Alignment,
  AutoLink,
  Autosave,
  BlockQuote,
  Bold,
  Code,
  Essentials,
  GeneralHtmlSupport,
  Heading,
  Highlight,
  HorizontalLine,
  Indent,
  IndentBlock,
  Italic,
  Link,
  Paragraph,
  RemoveFormat,
  SelectAll,
  SpecialCharacters,
  SpecialCharactersArrows,
  SpecialCharactersCurrency,
  SpecialCharactersEssentials,
  SpecialCharactersLatin,
  SpecialCharactersMathematical,
  SpecialCharactersText,
  Strikethrough,
  Subscript,
  Superscript,
  Table,
  TableCaption,
  TableCellProperties,
  TableColumnResize,
  TableProperties,
  TableToolbar,
  Underline,
  Undo,
} from "ckeditor5";
import "ckeditor5/ckeditor5.css";
const editorConfig = {
  toolbar: {
    items: [
      "undo",
      "redo",
      "|",
      "selectAll",
      "|",
      "heading",
      "|",
      "bold",
      "italic",
      "underline",
      "strikethrough",
      "subscript",
      "superscript",
      "code",
      "removeFormat",
      "|",
      "specialCharacters",
      "horizontalLine",
      "link",
      "insertTable",
      "highlight",
      "blockQuote",
      "|",
      "alignment",
      "|",
      "indent",
      "outdent",
      "|",
      "accessibilityHelp",
    ],
    shouldNotGroupWhenFull: false,
  },
  plugins: [
    AccessibilityHelp,
    Alignment,
    AutoLink,
    Autosave,
    BlockQuote,
    Bold,
    Code,
    Essentials,
    GeneralHtmlSupport,
    Highlight,
    HorizontalLine,
    Indent,
    IndentBlock,
    Italic,
    Link,
    Paragraph,
    RemoveFormat,
    SelectAll,
    SpecialCharacters,
    SpecialCharactersArrows,
    SpecialCharactersCurrency,
    SpecialCharactersEssentials,
    SpecialCharactersLatin,
    SpecialCharactersMathematical,
    SpecialCharactersText,
    Strikethrough,
    Subscript,
    Superscript,
    Table,
    TableCaption,
    TableCellProperties,
    TableColumnResize,
    TableProperties,
    TableToolbar,
    Underline,
    Undo,
  ],
  heading: {
    options: [
      {
        model: "paragraph",
        title: "Paragraph",
        class: "ck-heading_paragraph",
      },
      {
        model: "heading1",
        view: "h1",
        title: "Heading 1",
        class: "ck-heading_heading1",
      },
      {
        model: "heading2",
        view: "h2",
        title: "Heading 2",
        class: "ck-heading_heading2",
      },
      {
        model: "heading3",
        view: "h3",
        title: "Heading 3",
        class: "ck-heading_heading3",
      },
      {
        model: "heading4",
        view: "h4",
        title: "Heading 4",
        class: "ck-heading_heading4",
      },
      {
        model: "heading5",
        view: "h5",
        title: "Heading 5",
        class: "ck-heading_heading5",
      },
      {
        model: "heading6",
        view: "h6",
        title: "Heading 6",
        class: "ck-heading_heading6",
      },
    ],
  },
  htmlSupport: {
    allow: [
      {
        name: /^.*$/,
        styles: true,
        attributes: true,
        classes: true,
      },
    ],
  },
  initialData: "",
  link: {
    addTargetToExternalLinks: true,
    defaultProtocol: "https://",
    decorators: {
      toggleDownloadable: {
        mode: "manual",
        label: "Downloadable",
        attributes: {
          download: "file",
        },
      },
    },
  },
  placeholder: "Type or paste your content here!",
  table: {
    contentToolbar: [
      "tableColumn",
      "tableRow",
      "mergeTableCells",
      "tableProperties",
      "tableCellProperties",
    ],
  },
};

// ClassicEditor.create(document.querySelector("#editor"), editorConfig);
// Inisialisasi editor pertama
ClassicEditor.create(document.querySelector("#editor"), editorConfig)
  .then((editor) => {
    editor.setData(document.querySelector("#editor").value);
    console.log("Editor 1 is ready", editor);
  })
  .catch((error) => {
    console.error(error);
  });

// Inisialisasi editor kedua
// ClassicEditor.create(document.querySelector("#editor2"), editorConfig)
//   .then((editor) => {
//     editor.setData(document.querySelector("#editor2").value);
//     console.log("Editor 2 is ready", editor);
//   })
//   .catch((error) => {
//     console.error(error);
//   });

// // Inisialisasi editor ketiga
// ClassicEditor.create(document.querySelector("#editor3"), editorConfig)
//   .then((editor) => {
//     editor.setData(document.querySelector("#editor3").value);
//     console.log("Editor 3 is ready", editor);
//   })
//   .catch((error) => {
//     console.error(error);
//   });
// // Inisialisasi editor keempat
// ClassicEditor.create(document.querySelector("#editor4"), editorConfig)
//   .then((editor) => {
//     editor.setData(document.querySelector("#editor4").value);
//     console.log("Editor 4 is ready", editor);
//   })
//   .catch((error) => {
//     console.error(error);
//   });
// // Inisialisasi editor kelima
// ClassicEditor.create(document.querySelector("#editor5"), editorConfig)
//   .then((editor) => {
//     editor.setData(document.querySelector("#editor5").value);
//     console.log("Editor 5 is ready", editor);
//   })
//   .catch((error) => {
//     console.error(error);
//   });
